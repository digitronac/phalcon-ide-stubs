<?php 

namespace Phalcon\DI {

	/**
	 * Phalcon\DI\Injectable
	 *
	 * This class allows to access services in the services container by just only accessing a public property
	 * with the same name of a registered service
	 */
	
	abstract class Injectable implements \Phalcon\DI\InjectionAwareInterface, \Phalcon\Events\EventsAwareInterface {

		protected $_dependencyInjector;

		protected $_eventsManager;

		/**
 		 * @var \Phalcon\Mvc\ViewInterface
 		 */
		public $view;

		/**
		 * @var \Phalcon\Mvc\RouterInterface
	 	 */
		public $router;

		/**
		 * @var \Phalcon\Mvc\DispatcherInterface
	 	 */
		public $dispatcher;

		/**
		 * @var \Phalcon\Mvc\UrlInterface
	 	 */
		public $url;

		/**
		 * @var \Phalcon\DiInterface
	 	 */
		public $di;

		/**
		 * @var \Phalcon\HTTP\RequestInterface
	 	 */
		public $request;

		/**
		 * @var \Phalcon\HTTP\ResponseInterface
	 	 */
		public $response;

		/**
		 * @var \Phalcon\Flash\Direct
	 	 */
		public $flash;

		/**
		 * @var \Phalcon\Flash\Session
	 	 */
		public $flashSession;

		/**
		 * @var \Phalcon\Session\AdapterInterface
	 	 */
		public $session;

		/**
		 * @var \Phalcon\Session\Bag
	 	 */
		public $persistent;

		/**
		 * @var \Phalcon\Mvc\Model\ManagerInterface
	 	 */
		public $modelsManager;

		/**
		 * @var \Phalcon\Mvc\Model\MetadataInterface
	 	 */
		public $modelsMetadata;

		/**
		 * @var \Phalcon\Mvc\Model\Transaction\Manager
	 	 */
		public $transactionManager;

		/**
		 * @var \Phalcon\FilterInterface
	 	 */
		public $filter;

		/**
		 * @var \Phalcon\Security
	 	 */
		public $security;

		/**
		 * @var \Phalcon\Annotations\Adapter\Memory
	 	 */
		public $annotations

        /**
         * @var \Zend\Session\SessionManager
         */
        public $sessionManager;

        /**
         * @var \Phalcon\Debug\Dump
         */
        public $debug;

        /**
         * @var \Phalcon\Db\Adapter\Pdo\Mysql
         */
        public $db;

        /**
         * @var \Phalcon\Db\Adapter\Pdo\Mysql
         */
        public $dbSlave;

        /**
         * @var \Rasserbia\Tag\Tag
         */
        public $tag;

        /**
         * @var \Rasserbia\Assets\Manager
         */
        public $assets;

        /**
         * @var \Symfony\Component\Filesystem\Filesystem
         */
        public $fs;

        /**
         * @var \Zend\Log\Writer\Stream
         */
        public $fileLogger;

        /**
         * @var \Phalcon\Db\Profiler
         */
        public $dbProfiler;

        /**
         * @var \Zend\Log\Logger
         */
        public $log;

        /**
         * @var \Zend\Db\Adapter\Adapter
         */
        public $zendDbSlave;

        /**
         * @var \Zend\Json\Json
         */
        public $json;

        /**
         * @var \Rasserbia\Cache\Backend\Memcache
         */
        public $memcache;

        /**
         * @var \Phalcon\Acl\Adapter\Memory
         */
        public $acl;

        /**
         * Memcache log writer.
         *
         * @var \Rasserbia\Log\Writer\Memcache
         */
        public $memcacheWriter;

        /**
         * Application configuration.
         *
         * @var \Phalcon\Config
         */
        public $config;

        /**
         * @var \Rasserbia\User\Visitor
         */
        public $visitor;

        /**
         * Validator translator instance.
         *
         * @var \Zend\Mvc\I18n\Translator
         */
        public $validatorTranslator;

        /**
         * @var \Zend\I18n\Translator\Translator
         */
        public $translator;

        /**
         * @var \Rasserbia\Cache\Backend\Redis
         */
        public $cache;

        /**
         * @var \Redis
         */
        public $redis;
		
		/**
		 * Sets the dependency injector
		 *
		 * @param \Phalcon\DiInterface $dependencyInjector
		 * @throw \Phalcon\Di\Exception
		 */
		public function setDI($dependencyInjector){ }


		/**
		 * Returns the internal dependency injector
		 *
		 * @return \Phalcon\DiInterface
		 */
		public function getDI(){ }


		/**
		 * Sets the event manager
		 *
		 * @param \Phalcon\Events\ManagerInterface $eventsManager
		 */
		public function setEventsManager($eventsManager){ }


		/**
		 * Returns the internal event manager
		 *
		 * @return \Phalcon\Events\ManagerInterface
		 */
		public function getEventsManager(){ }


		/**
		 * Magic method __get
		 *
		 * @param string $propertyName
		 */
		public function __get($property){ }

	}
}
