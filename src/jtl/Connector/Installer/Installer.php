<?php

/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Installer
 */
namespace jtl\Connector\Installer;

use \jtl\Core\Application\Application as CoreApplication;
use \jtl\Core\Utilities\Config\Config as ConnectorConfig;
use \jtl\Core\Utilities\Config\Loader\Json as ConfigJson;
use \jtl\Core\Utilities\Config\Loader\System as ConfigSystem;
use \jtl\Connector\I18n\Utils as I18nUtils;

/**
 * Description of Installer
 *
 * @access public
 * @author Christian Spoo <christian.spoo@jtl-software.de>
 */
class Installer extends CoreApplication
{
    /**
     * Twig environment object, used for rendering templates
     * 
     * @var \Twig_Environment
     */
    public static $twig = null;
    
    /**
     * Connector configuration object
     * 
     * @var \jtl\Core\Utilities\Config\Config
     */
    public static $config = null;
    
    /**
     * Current installer step index
     * 
     * @var int
     */
    protected $_currentStep = 1;
    
    /**
     * @return array
     */
    protected function getInstallSteps()
    {
        return array(
          '\\jtl\\Connector\\Installer\\Step\\WelcomeStep',
          '\\jtl\\Connector\\Installer\\Step\\FinishStep'
        );
    }
    
    public function currentStep()
    {
        return $this->_currentStep;
    }
    
    public function stepUrl($index)
    {
        $steps = $this->getInstallSteps();
        
        if (count($steps) < $index) {
            // TODO: Throw error
            return '';
        }
        
        if ($index > 1)
            return INSTALLER_BASE_URI . '/index.php/' . $index;
        else
            return INSTALLER_BASE_URI . '/';
    }
    
    protected final function runStep($index)
    {
        $steps = $this->getInstallSteps();
        
        // 1-based index
        if (count($steps) < $index) {
            $startUrl = $this->stepUrl(1);
            header('Location: ' . $startUrl);
            
            return;
        }
        
        $class = $steps[$index - 1];
        $stepObject = new $class($this);
        $stepObject->run();
    }
    
    public final function run()
    {
        $tmpDir = INSTALLER_DIR . '/../tmp';
        if (!@stat($tmpDir)) {
            mkdir($tmpDir);
            chmod ($tmpDir, 0777);
        }
        $tmpDir .= '/cache';
        if (!@stat($tmpDir)) {
            mkdir($tmpDir);
            chmod($tmpDir, 0777);
        }
         
        // Configure gettext
        if (extension_loaded('gettext')) {
            $langs = I18nUtils::getAcceptedLanguages();
            
            foreach ($langs as $lang => $priority) {
                if (file_exists(INSTALLER_DIR . '/i18n/' . $lang . '/LC_MESSAGES/magento-connector.mo')) {
                    putenv(sprintf('LC_ALL=%s', $lang));
                    setlocale(LC_ALL, $lang);
                    
                    bindtextdomain('magento-connector', INSTALLER_DIR . '/i18n/nocache');
                    bindtextdomain('magento-connector', INSTALLER_DIR . '/i18n');
                    bind_textdomain_codeset('magento-connector', 'UTF-8');
                    textdomain('magento-connector');

                    break;
                }
            }
        }
         
        // Creates the config instance
        $this->config = new ConnectorConfig(array(
            new ConfigSystem(),
            new ConfigJson(APP_DIR . '/../config/config.json')
        ));
      
        // Initialize Twig environment
        $tplLoader = new \Twig_Loader_Filesystem(INSTALLER_DIR . '/templates/');
        static::$twig = new \Twig_Environment($tplLoader, array(
          'cache' => $tmpDir,
          'auto_reload' => true
        ));
        static::$twig->addExtension(new \Twig_Extensions_Extension_I18n());
        static::$twig->addExtension(new TemplateGlobals());
 
        // Determine step to be executed
        if (isset($_SERVER['PATH_INFO'])) {
            $queryPath = trim($_SERVER['PATH_INFO']);

            // Sanitize URL parameters
            if (strlen($queryPath) > 0) {
                if (preg_match('/\/?([0-9]+)\/?/', $queryPath, $matches)) {
                    $step = $matches[1];
                    $this->_currentStep = intval($step);
                }
                else {
                    header('Location: ' . $this->stepUrl(1));
                }
            }
        }

        // Run installer step
        $this->runStep($this->_currentStep);
    }
}
