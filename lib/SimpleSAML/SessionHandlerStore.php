<?php

/**
 * Session storage in the data store.
 *
 * @package SimpleSAMLphp
 */
class SimpleSAML_SessionHandlerStore extends SimpleSAML_SessionHandlerCookie {

	/**
	 * The data store we save the session to.
	 *
	 * @var SimpleSAML_Store
	 */
	private $store;

	/**
	 * Initialize the session.
	 *
	 * @param SimpleSAML_Store $store The store to use.
	 */
	protected function __construct(SimpleSAML_Store $store) {
		parent::__construct();

		$this->store = $store;
	}


	/**
	 * Load a session from the data store.
	 *
	 * @param string|null $sessionId The ID of the session we should load, or null to use the default.
	 * @return SimpleSAML_Session|null The session object, or null if it doesn't exist.
	 */
	public function loadSession($sessionId = NULL) {
		assert('is_string($sessionId) || is_null($sessionId)');

		if ($sessionId === NULL) {
			$sessionId = $this->getCookieSessionId();
		}

		$session = $this->store->get('session', $sessionId);
		if ($session !== NULL) {
			assert('$session instanceof SimpleSAML_Session');
			return $session;
		}

		return NULL;
	}


	/**
	 * Save a session to the data store.
	 *
	 * @param SimpleSAML_Session $session The session object we should save.
	 */
	public function saveSession(SimpleSAML_Session $session) {

		$sessionId = $session->getSessionId();

		$config = SimpleSAML_Configuration::getInstance();
		$sessionDuration = $config->getInteger('session.duration', 8*60*60);
		$expire = time() + $sessionDuration;

		$this->store->set('session', $sessionId, $session, $expire);
	}

}
