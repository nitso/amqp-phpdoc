<?php
/**
 * Contains a message and all of its attributes.
 */
class AMQPEnvelope {
    /**
     * Get the message appid
     * @return string
     */
    public function getAppId() {}

    /**
     * Get the message body
     * @return string
     */
    public function getBody() {}

    /**
     * Get the message contentencoding
     * @return string
     */
    public function getContentEncoding() {}

    /**
     * Get the message contenttype
     * @return string
     */
    public function getContentType() {}

    /**
     * Get the message correlation id
     * @return string
     */
    public function getCorrelationId() {}

    /**
     * Get the message delivery tag
     * @return string
     */
    public function getDeliveryTag() {}

    /**
     * Get the message exchange
     * @return string
     */
    public function getExchange() {}

    /**
     * Get the message expiration
     * @return string
     */
    public function getExpiration() {}

    /**
     * Get a specific message header
     * @param string $header_key
     * @return string
     */
    public function getHeader($header_key) {}

    /**
     * Get the message headers
     * @return array
     */
    public function getHeaders() {}

    /**
     * Get the message id
     * @return string
     */
    public function getMessageId() {}

    /**
     * Get the message priority
     * @return string
     */
    public function getPriority() {}

    /**
     * Get the message replyto
     * @return string
     */
    public function getReplyTo() {}

    /**
     * Get the message routing key
     * @return string
     */
    public function getRoutingKey() {}

    /**
     * Get the message timestamp
     * @return string
     */
    public function getTimeStamp() {}

    /**
     * Get the message type
     * @return string
     */
    public function getType() {}

    /**
     * Get the message user id
     * @return string
     */
    public function getUserId() {}

    /**
     * Whether this is a redelivery of the message
     * @return bool
     */
    public function isRedelivery () {}
}
