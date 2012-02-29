<?php

class AMQPException extends Exception {}

class AMQPChannelException extends AMQPException {}

class AMQPConnectionException extends AMQPException {}

class AMQPExchangeException extends AMQPException {}
