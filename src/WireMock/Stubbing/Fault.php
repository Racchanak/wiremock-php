<?php

namespace WireMock\Stubbing;

class Fault
{
    const EMPTY_RESPONSE = 'EMPTY_RESPONSE';
    const MALFORMED_RESPONSE_CHUNK = 'MALFORMED_RESPONSE_CHUNK';
    const RANDOM_DATA_THEN_CLOSE = 'RANDOM_DATA_THEN_CLOSE';
}