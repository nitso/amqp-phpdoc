<?php
define('AMQP_NOPARAM', 0);

//AMQP queue flags
define('AMQP_DURABLE', 2);
define('AMQP_PASSIVE', 4);
define('AMQP_EXCLUSIVE', 8);
define('AMQP_AUTODELETE', 16);

define('AMQP_AUTOACK', 128);
//AMQPExchange delete flag
define('AMQP_IFUNUSED', 528);
//AMQPExchange publish flags
define('AMQP_MANDATORY', 1024);
define('AMQP_IMMEDIATE', 2048);

define('AMQP_MULTIPLE', 4096);

//AMQP exchange types
define('AMQP_EX_TYPE_DIRECT', 'direct');
define('AMQP_EX_TYPE_FANOUT', 'fanout');
define('AMQP_EX_TYPE_HEADER', 'header');
define('AMQP_EX_TYPE_TOPIC', 'topic');
