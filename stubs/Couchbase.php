<?php

class Couchbase
{
    /**@see php-ext-couchbase/couchbase.c & libcoucbase/types.h */
    const SUCCESS = 0x00;
    const AUTH_CONTINUE = 0x01;
    const AUTH_ERROR = 0x02;
    const DELTA_BADVAL = 0x03;
    const E2BIG = 0x04;
    const EBUSY = 0x05;
    const EINTERNAL = 0x06;
    const EINVAL = 0x07;
    const ENOMEM = 0x08;
    const ERANGE = 0x09;
    const ERROR = 0x0a;
    const ETMPFAIL = 0x0b;
    const KEY_EEXISTS = 0x0c;
    const KEY_ENOENT = 0x0d;
    const LIBEVENT_ERROR = 0x0e;
    const NETWORK_ERROR = 0x0f;
    const NOT_MY_VBUCKET = 0x10;
    const NOT_STORED = 0x11;
    const NOT_SUPPORTED = 0x12;
    const UNKNOWN_COMMAND = 0x13;
    const UNKNOWN_HOST = 0x14;
    const PROTOCOL_ERROR = 0x15;
    const ETIMEDOUT = 0x16;
    const CONNECT_ERROR = 0x17;
    const BUCKET_ENOENT = 0x18;
    const CLIENT_ENOMEM = 0x19;
    const CLIENT_ETMPFAIL = 0x20;
    const EBADHANDLE = 0x21;

    const OPT_SERIALIZER = 1;
    const OPT_COMPRESSION = 2;
    const OPT_PREFIX_KEY = 3;

    const COMPRESSION_NONE = 0;
    const COMPRESSION_FASTLZ = 1;
    const COMPRESSION_ZLIB = 2;

    const SERIALIZER_PHP = 0;
    const SERIALIZER_JSON = 1;
    const SERIALIZER_JSON_ARRAY = 2;

    const GET_PRESERVE_ORDER = 1; //<<0;

    /**
     * Create a Couchbase instance
     * @link http://www.couchbase.com/docs/couchbase-sdk-php-1.1/api-reference-summary.html
     * @param string $host
     * @param string $user
     * @param string $password
     * @param string $bucket
     * @param bool $persistent
     */
    public function __construct($host, $user = '', $password = '', $bucket = 'default', $persistent = false)
    {
    }

    /**Retrieve an item
     * @link http://www.couchbase.com/docs/couchbase-sdk-php-1.1/api-reference-retrieve.html#table-couchbase-sdk_php_get
     * @param string $key Key used to reference the value. The key cannot contain control characters or whitespace.
     * @param mixed $cache_cb Callback function or method to be called
     * @param string &$cas CAS token for conditional operations (string or float?)
     * @param int $expiry Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @param bool $lock
     * @return string Binary object
     *    If key not exist then get() return null & getResultCode() return COUCHBASE_KEY_ENOENT
     */
    public function get($key, $cache_cb = null, &$cas = null, $expiry = 0, $lock = false)
    {
    }

    /**Retrieve multiple items
     * @Link http://www.couchbase.com/docs/couchbase-sdk-php-1.1/api-reference-retrieve.html#table-couchbase-sdk_php_get-multi
     * @param array $keys Array of key used to reference the value. The key cannot contain control characters or whitespace.
     * @param array $cas Unique value used to identify a key/value combination
     * @param int $flag
     * @param int $expiry Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @param bool $lock
     * @return array of found items: key => value (items not found will not have key in the result)
     */
    public function getMulti(array $keys, array &$cas = null, $flag = 0, $expiry = 0, $lock = false)
    {
    }

    /**Update the expiry time of an item
     * @link http://www.couchbase.com/docs/couchbase-sdk-php-1.1/api-reference-update.html#table-couchbase-sdk_php_touch
     * @param string $key Key used to reference the value. The key cannot contain control characters or whitespace.
     * @param int $expiry Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @return bool
     */
    public function touch($key, $expiry)
    {
    }

    /**Update the expiry time of multi item
     * @param array $keys  Array of key used to reference the value. The key cannot contain control characters or whitespace.
     * @param int $expiry Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @return bool
     */
    public function touchMulti(array $keys, $expiry)
    {
    }

    /**Compare and set a value providing the supplied CAS key matches
     * @param string $cas Unique value used to identify a key/value combination
     * @param string $key Key used to reference the value. The key cannot contain control characters or whitespace.
     * @param mixed $value Value to be stored
     * @param int $expiration Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @return bool true on success or false on failure.
     */
    public function cas($cas, $key, $value, $expiration = 0)
    {
    }

    /**Add a value with the specified key that does not already exist. Will fail if the key/value pair already exist.
     * @param string $key Key used to reference the value. The key cannot contain control characters or whitespace.
     * @param mixed $value Value to be stored
     * @param int $expiration Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @return string $cas
     */
    public function add($key, $value, $expiration = 0)
    {
    }

    /**Store a value using the specified key, whether the key already exists or not. Will overwrite a value if the given key/value already exists.
     * @param string $key Key used to reference the value. The key cannot contain control characters or whitespace.
     * @param mixed $value Value to be stored
     * @param int $expiration Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @param string $cas Unique value used to identify a key/value combination
     * @return bool true on success or false on failure.
     * @return string $cas
     */
    public function set($key, $value, $expiration = 0, $cas = '0')
    {
    }

    /**Set Multiple key/value items at once
     * @param array $values  Array of key/value. The key cannot contain control characters or whitespace.
     * @param int $expiration Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @return array $key => $cas
     */
    public function setMulti(array $values, $expiration = 0)
    {
    }

    /**Prepend a value to an existing key
     * @param string $key Key used to reference the value. The key cannot contain control characters or whitespace.
     * @param mixed $value Value to be stored
     * @param int $expiration Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @param string $cas Unique value used to identify a key/value combination
     * @return string | bool - $cas? or false if key not exist, or the $cas param is not match, or on other failure.
     *    If key not exist then getResultCode() will return COUCHBASE_NOT_STORED.
     *    If the $cas param is not match then getResultCode() will return COUCHBASE_KEY_EEXISTS
     */
    public function prepend($key, $value, $expiration = 0, $cas = '0')
    {
    }

    /**Append a value to an existing key
     * @param string $key Key used to reference the value. The key cannot contain control characters or whitespace.
     * @param mixed $value Value to be stored
     * @param int $expiration Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @param string $cas Unique value used to identify a key/value combination
     * @return string | bool - $cas? or false if key not exist, or the $cas param is not match, or on other failure.
     *    If key not exist then getResultCode() will return COUCHBASE_NOT_STORED.
     *    If the $cas param is not match then getResultCode() will return COUCHBASE_KEY_EEXISTS
     */
    public function append($key, $value, $expiration = 0, $cas = '0')
    {
    }

    /**
     * @param string $key Key used to reference the value. The key cannot contain control characters or whitespace.
     * @param mixed $value Value to be stored
     * @param int $expiration Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @param string $cas
     * @return string | bool - $cas? or false.
     *    If key not exist then replace return false & getResultCode() return COUCHBASE_KEY_ENOENT
     */
    public function replace($key, $value, $expiration = 0, $cas = '0')
    {
    }

    /**
     * @param string $key Key used to reference the value. The key cannot contain control characters or whitespace.
     * @param int $offset
     * @param bool $create
     * @param int $expiration Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @param int $initial the initial value
     * @return int new item's value on success or false on failure.
     *    If key not exist & $initial is not set then getResultCode() return COUCHBASE_KEY_ENOENT
     * @throw Exception if the value is not a number
     */
    public function increment($key, $offset = 1, $create = false, $expiration = 0, $initial = 0)
    {
    }

    /**
     * @param string $key Key used to reference the value. The key cannot contain control characters or whitespace.
     * @param int $offset
     * @param bool $create
     * @param int $expiration Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @param int $initial the initial value
     * @return int new item's value on success or false on failure.
     *    If key not exist & $initial is not set then getResultCode() return COUCHBASE_KEY_ENOENT
     */
    public function decrement($key, $offset = 1, $create = false, $expiration = 0, $initial = 0)
    {
    }

    /**
     * @return array Array of server statistics, one entry per server: $endpoint => $hash. $hash is an array & has key ep_version
     */
    public function getStats()
    {
    }

    /**Request multiple items. Use with fetch or fetchAll
     * @param array $keys Array of key used to reference the value. The key cannot contain control characters or whitespace.
     * @param bool $with_cas Whether to request CAS token values also.
     * @param mixed $value_cb The result callback or null.
     * @param int $expiry Expiry time for key. Values larger than 30*24*60*60 seconds (30 days) are interpreted as absolute times (from the epoch).
     * @param bool $locking
     * @return bool true on success or false on failure.
     */
    public function getDelayed(array $keys, $with_cas = false, $value_cb = null, $expiry = 0, $locking = false)
    {
    }

    /**Fetch the next result from getDelayed
     * @return array|bool. After fetch all items then fetch() will return false
     * on success, this function return an array which contain the key, value, and optionally cas. i.e.
     * <tt>{"key":"the_key","value":.., "cas":..}</tt>
     */
    public function fetch()
    {
    }

    /**Fetch all the remaining results from getDelayed
     * @return array|bool. After fetch all items then fetchAll() will return false
     * on success, this function return an array of
     * arrays which contain the key, value, and optionally cas. i.e.
     * <tt>[{"key":"first_key"},{"key":"second_key"}]</tt>
     */
    public function fetchAll()
    {
    }

    /**
     * @link http://www.couchbase.com/docs/couchbase-manual-2.0/couchbase-views-writing-querying.html
     * @param string $doc_name
     * @param string $view_name
     * @param array $options that has keys: "startkey", "endkey",..
     * @return array $result: ["total_rows", "rows": ["key", "value", "id": docId]]
     */
    public function view($doc_name, $view_name, array $options = null)
    {
    }

    /**
     * @param string $key Key used to reference the value. The key cannot contain control characters or whitespace.
     * @param string $cas Unique value used to identify a key/value combination
     * @return bool true on success or false on failure. NOTE! oddly, delete returns the Couchbase instance itself rather than true on success
     */
    public function delete($key, $cas = '0')
    {
    }

    /**Invalidate all items in the cache
     * @return bool true on success or false on failure.??
     */
    public function flush()
    {
    }

    /** Return the result code of the last operation
     * @return int Result code of the last Couchbase operation.
     */
    public function getResultCode()
    {
    }

    /**Return the message describing the result of the last operation
     * @return string Message describing the result of the last Couchbase operation.
     */
    public function getResultMessage()
    {
    }

    /**Set a Couchbase option
     * @param int $option
     * @param mixed $value
     * @return bool true on success or false on failure.?? need cast to bool on success?
     */
    public function setOption($option, $value)
    {
    }

    /**Retrieve a Memcached option value
     * @param int $option One of the Couchbase::OPT_* constants.
     * @return mixed the value of the requested option, or false on error
     */
    public function getOption($option)
    {
    }

    /**
     * @return array Array of server versions, one entry per server.
     */
    public function getVersion()
    {
    }

    /**
     * @return string
     */
    public function getClientVersion()
    {
    }
}

?>