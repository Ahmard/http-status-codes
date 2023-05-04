<?php

namespace HttpStatusCodes;

class Description
{
    public static function describe(StatusCode $code): StatusDetail
    {
        return match ($code) {
            // 1xx informational response
            StatusCode::CONTINUE => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Continue',
                desc: 'The server has received the request headers and the client should proceed to send the request body (in the case of a request for which a body needs to be sent; for example, a POST request).'
            ),
            StatusCode::SWITCHING_PROTOCOLS => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Switching Protocols',
                desc: 'The requester has asked the server to switch protocols and the server has agreed to do so.'
            ),
            StatusCode::PROCESSING => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Processing',
                desc: 'A WebDAV request may contain many sub-requests involving file operations, requiring a long time to complete the request. This code indicates that the server has received and is processing the request, but no response is available yet.'
            ),
            StatusCode::EARLY_HINTS => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Early Hints',
                desc: 'Used to return some response headers before final HTTP message.'
            ),


            // 2xx success
            StatusCode::OK => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Ok',
                desc: 'Standard response for successful HTTP requests.'
            ),
            StatusCode::CREATED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Created',
                desc: 'The request has been fulfilled, resulting in the creation of a new resource.'
            ),
            StatusCode::ACCEPTED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Accepted',
                desc: 'The request has been accepted for processing, but the processing has not been completed.'
            ),
            StatusCode::NON_AUTHORITATIVE_INFORMATION => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Non-Authoritative Information',
                desc: 'The server is a transforming proxy (e.g. a Web accelerator) that received a 200 OK from its origin, but is returning a modified version of the origin\'s response.'
            ),
            StatusCode::NO_CONTENT => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'No Content',
                desc: 'The server successfully processed the request, and is not returning any content.'
            ),
            StatusCode::RESET_CONTENT => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Reset Content',
                desc: 'The server successfully processed the request, asks that the requester reset its document view, and is not returning any content.'
            ),
            StatusCode::PARTIAL_CONTENT => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Partial Content',
                desc: 'The server is delivering only part of the resource (byte serving) due to a range header sent by the client.'
            ),
            StatusCode::MULTI_STATUS => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Multi-Status',
                desc: 'The message body that follows is by default an XML message and can contain a number of separate response codes, depending on how many sub-requests were made.'
            ),
            StatusCode::ALREADY_REPORTED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Already Reported',
                desc: 'The members of a DAV binding have already been enumerated in a preceding part of the (multistatus) response, and are not being included again.'
            ),
            StatusCode::IM_USED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'IM Used',
                desc: 'The server has fulfilled a request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.'
            ),


            // 3xx redirection
            StatusCode::MULTIPLE_CHOICES => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Multiple Choices',
                desc: 'Indicates multiple options for the resource from which the client may choose (via agent-driven content negotiation). For example, this code could be used to present multiple video format options, to list files with different filename extensions, or to suggest word-sense disambiguation.'
            ),
            StatusCode::MOVED_PERMANENTLY => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Moved Permanently',
                desc: 'This and all future requests should be directed to the given URI.'
            ),
            StatusCode::FOUND => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Found (Previously "Moved temporarily")',
                desc: 'Tells the client to look at (browse to) another URL.'
            ),
            StatusCode::SEE_OTHER => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'See Other',
                desc: 'The response to the request can be found under another URI using the GET method.'
            ),
            StatusCode::NOT_MODIFIED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Not Modified',
                desc: 'Indicates that the resource has not been modified since the version specified by the request headers If-Modified-Since or If-None-Match.'
            ),
            StatusCode::USE_PROXY => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Use Proxy',
                desc: 'The requested resource is available only through a proxy, the address for which is provided in the response.'
            ),
            StatusCode::SWITCH_PROXY => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Switch Proxy',
                desc: 'No longer used. Originally meant "Subsequent requests should use the specified proxy."'
            ),
            StatusCode::TEMPORARY_REDIRECT => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Temporary Redirect',
                desc: 'In this case, the request should be repeated with another URI; however, future requests should still use the original URI.'
            ),
            StatusCode::PERMANENT_REDIRECT => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Permanent Redirect',
                desc: 'This and all future requests should be directed to the given URI. '
            ),


            // 4xx client errors
            StatusCode::BAD_REQUEST => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Bad Request',
                desc: ''
            ),
            StatusCode::UNAUTHORIZED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Unauthorized',
                desc: 'Similar to 403 Forbidden, but specifically for use when authentication is required and has failed or has not yet been provided.'
            ),
            StatusCode::PAYMENT_REQUIRED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Payment Required',
                desc: 'Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micropayment scheme, as proposed, for example, by GNU Taler,[14] but that has not yet happened, and this code is not widely used.'
            ),
            StatusCode::FORBIDDEN => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Forbidden',
                desc: 'The request contained valid data and was understood by the server, but the server is refusing action.'
            ),
            StatusCode::NOT_FOUND => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Not Found',
                desc: 'The requested resource could not be found but may be available in the future.'
            ),
            StatusCode::METHOD_NOT_ALLOWED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Method Not Allowed',
                desc: 'A request method is not supported for the requested resource; for example, a GET request on a form that requires data to be presented via POST, or a PUT request on a read-only resource.'
            ),
            StatusCode::NOT_ACCEPTABLE => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Not Acceptable',
                desc: 'The requested resource is capable of generating only content not acceptable according to the Accept headers sent in the request.'
            ),
            StatusCode::PROXY_AUTHENTICATION_REQUIRED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Proxy Authentication Required',
                desc: 'The client must first authenticate itself with the proxy.'
            ),
            StatusCode::REQUEST_TIMEOUT => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Request Timeout',
                desc: 'The server timed out waiting for the request.'
            ),
            StatusCode::CONFLICT => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Conflict',
                desc: 'Indicates that the request could not be processed because of conflict in the current state of the resource, such as an edit conflict between multiple simultaneous updates.'
            ),
            StatusCode::GONE => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Gone',
                desc: 'Indicates that the resource requested was previously in use but is no longer available and will not be available again.'
            ),
            StatusCode::LENGTH_REQUIRED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Length Required',
                desc: 'The request did not specify the length of its content, which is required by the requested resource.'
            ),
            StatusCode::PRECONDITION_FAILED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Precondition Failed',
                desc: 'The server does not meet one of the preconditions that the requester put on the request header fields.'
            ),
            StatusCode::PAYLOAD_TOO_LARGE => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Payload Too Large',
                desc: 'The request is larger than the server is willing or able to process. Previously called "Request Entity Too Large" in RFC 2616.'
            ),
            StatusCode::URI_TOO_LONG => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'URI Too Long',
                desc: 'The URI provided was too long for the server to process.'
            ),
            StatusCode::UNSUPPORTED_MEDIA_TYPE => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Unsupported Media Type',
                desc: 'The request entity has a media type which the server or resource does not support.'
            ),
            StatusCode::RANGE_NOT_SATISFIABLE => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Range Not Satisfiable',
                desc: 'The client has asked for a portion of the file (byte serving), but the server cannot supply that portion.'
            ),
            StatusCode::EXPECTATION_FAILED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Expectation Failed',
                desc: 'The server cannot meet the requirements of the Expect request-header field.'
            ),
            StatusCode::IM_A_TEAPOT => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'I\'m a teapot',
                desc: 'This code was defined in 1998 as one of the traditional IETF April Fools\' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers.'
            ),
            StatusCode::MISDIRECTED_REQUEST => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Misdirected Request',
                desc: 'The request was directed at a server that is not able to produce a response (for example because of connection reuse).'
            ),
            StatusCode::UNPROCESSABLE_ENTITY => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Unprocessable Entity',
                desc: 'The request was well-formed but was unable to be followed due to semantic errors.'
            ),
            StatusCode::LOCKED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Locked',
                desc: 'The resource that is being accessed is locked.'
            ),
            StatusCode::FAILED_DEPENDENCY => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Failed Dependency',
                desc: 'The request failed because it depended on another request and that request failed'
            ),
            StatusCode::TOO_EARLY => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Too Early',
                desc: 'Indicates that the server is unwilling to risk processing a request that might be replayed.'
            ),
            StatusCode::UPGRADE_REQUIRED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Upgrade Required',
                desc: 'The client should switch to a different protocol such as TLS/1.3, given in the Upgrade header field.'
            ),
            StatusCode::PRECONDITION_REQUIRED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Precondition Required',
                desc: 'The origin server requires the request to be conditional. Intended to prevent the \'lost update\' problem, where a client GETs a resource\'s state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict.'
            ),
            StatusCode::TOO_MANY_REQUESTS => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Too Many Requests',
                desc: 'The user has sent too many requests in a given amount of time. Intended for use with rate-limiting schemes.'
            ),
            StatusCode::REQUEST_HEADER_FIELDS_TOO_LARGE => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Request Header Fields Too Large',
                desc: 'The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.'
            ),
            StatusCode::UNAVAILABLE_FOR_LEGAL_REASONS => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Unavailable For Legal Reasons ',
                desc: 'A server operator has received a legal demand to deny access to a resource or to a set of resources that includes the requested resource.'
            ),


            // 5xx server errors
            StatusCode::INTERNAL_SERVER_ERROR => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Internal Server Error',
                desc: 'A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.'
            ),
            StatusCode::NOT_IMPLEMENTED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Not Implemented',
                desc: 'The server either does not recognize the request method, or it lacks the ability to fulfil the request.'
            ),
            StatusCode::BAD_GATEWAY => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Bad Gateway',
                desc: 'The server was acting as a gateway or proxy and received an invalid response from the upstream server.'
            ),
            StatusCode::SERVICE_UNAVAILABLE => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Service Unavailable',
                desc: 'The server cannot handle the request (because it is overloaded or down for maintenance). Generally, this is a temporary state.'
            ),
            StatusCode::GATEWAY_TIMEOUT => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Gateway Timeout',
                desc: 'The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.'
            ),
            StatusCode::HTTP_VERSION_NOT_SUPPORTED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'HTTP Version Not Supported',
                desc: 'The server does not support the HTTP version used in the request.'
            ),
            StatusCode::VARIANT_ALSO_NEGOTIATES => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Variant Also Negotiates',
                desc: 'Transparent content negotiation for the request results in a circular reference.'
            ),
            StatusCode::INSUFFICIENT_STORAGE => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Insufficient Storage',
                desc: 'The server is unable to store the representation needed to complete the request.'
            ),
            StatusCode::LOOP_DETECTED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Loop Detected',
                desc: 'The server detected an infinite loop while processing the request (sent instead of 208 Already Reported).'
            ),
            StatusCode::NOT_EXTENDED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Not Extended ',
                desc: 'Further extensions to the request are required for the server to fulfil it.'
            ),
            StatusCode::NETWORK_AUTHENTICATION_REQUIRED => new StatusDetail(
                statusCode: $code,
                code: $code->value,
                title: 'Network Authentication Required',
                desc: 'The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network (e.g., "captive portals" used to require agreement to Terms of Service before granting full Internet access via a Wi-Fi hotspot).'
            ),
        };
    }
}