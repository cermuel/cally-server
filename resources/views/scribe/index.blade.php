<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:3000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.11.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.11.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">POST api/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-logout">
                                <a href="#endpoints-POSTapi-logout">POST api/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-forgot-password">
                                <a href="#endpoints-POSTapi-forgot-password">POST api/forgot-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-reset-password">
                                <a href="#endpoints-POSTapi-reset-password">POST api/reset-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-resend-email">
                                <a href="#endpoints-GETapi-resend-email">GET api/resend-email</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-verify-email">
                                <a href="#endpoints-GETapi-verify-email">GET api/verify-email</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-google-redirect">
                                <a href="#endpoints-GETapi-google-redirect">GET api/google/redirect</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-google-callback">
                                <a href="#endpoints-GETapi-google-callback">GET api/google/callback</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-connections-google-redirect">
                                <a href="#endpoints-GETapi-connections-google-redirect">GET api/connections/google/redirect</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-public-profile">
                                <a href="#endpoints-GETapi-public-profile">GET api/public/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-public--username--events">
                                <a href="#endpoints-GETapi-public--username--events">GET api/public/{username}/events</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-public-events--event_id--schedule">
                                <a href="#endpoints-GETapi-public-events--event_id--schedule">GET api/public/events/{event_id}/schedule</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-public-schedule">
                                <a href="#endpoints-POSTapi-public-schedule">POST api/public/schedule</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bookings-details--id-">
                                <a href="#endpoints-GETapi-bookings-details--id-">GET api/bookings/details/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-guest--email-">
                                <a href="#endpoints-GETapi-guest--email-">GET api/guest/{email}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-guests">
                                <a href="#endpoints-GETapi-guests">GET api/guests</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-guests">
                                <a href="#endpoints-POSTapi-guests">POST api/guests</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-guests--id-">
                                <a href="#endpoints-PUTapi-guests--id-">PUT api/guests/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-guests--id-">
                                <a href="#endpoints-DELETEapi-guests--id-">DELETE api/guests/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users-me">
                                <a href="#endpoints-GETapi-users-me">GET api/users/me</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users-check-username">
                                <a href="#endpoints-GETapi-users-check-username">GET api/users/check-username</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-users-edit-profile">
                                <a href="#endpoints-PATCHapi-users-edit-profile">PATCH api/users/edit-profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-users-change-password">
                                <a href="#endpoints-PATCHapi-users-change-password">PATCH api/users/change-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-users-complete-onboarding">
                                <a href="#endpoints-PATCHapi-users-complete-onboarding">PATCH api/users/complete-onboarding</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-availability">
                                <a href="#endpoints-GETapi-availability">GET api/availability</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-availability">
                                <a href="#endpoints-POSTapi-availability">POST api/availability</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-availability--id-">
                                <a href="#endpoints-PUTapi-availability--id-">PUT api/availability/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-availability--id-">
                                <a href="#endpoints-DELETEapi-availability--id-">DELETE api/availability/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-connections">
                                <a href="#endpoints-GETapi-connections">GET api/connections</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-links">
                                <a href="#endpoints-GETapi-links">GET api/links</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-links--id-">
                                <a href="#endpoints-GETapi-links--id-">GET api/links/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-links--id-">
                                <a href="#endpoints-PUTapi-links--id-">PUT api/links/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-links--id-">
                                <a href="#endpoints-DELETEapi-links--id-">DELETE api/links/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bookings">
                                <a href="#endpoints-GETapi-bookings">GET api/bookings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-bookings">
                                <a href="#endpoints-POSTapi-bookings">POST api/bookings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-bookings--id-">
                                <a href="#endpoints-GETapi-bookings--id-">GET api/bookings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-bookings--id-">
                                <a href="#endpoints-PUTapi-bookings--id-">PUT api/bookings/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-bookings--id-">
                                <a href="#endpoints-DELETEapi-bookings--id-">DELETE api/bookings/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: October 2, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:3000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-logout">POST api/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"+-0pBNvYgxwmi\\/#iw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "+-0pBNvYgxwmi\/#iw"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="+-0pBNvYgxwmi/#iw"
               data-component="body">
    <br>
<p>Must be at least 4 characters. Example: <code>+-0pBNvYgxwmi/#iw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-forgot-password">POST api/forgot-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-forgot-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/forgot-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/forgot-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-forgot-password">
</span>
<span id="execution-results-POSTapi-forgot-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-forgot-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-forgot-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-forgot-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-forgot-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-forgot-password" data-method="POST"
      data-path="api/forgot-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-forgot-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-forgot-password"
                    onclick="tryItOut('POSTapi-forgot-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-forgot-password"
                    onclick="cancelTryOut('POSTapi-forgot-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-forgot-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/forgot-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-forgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-forgot-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-forgot-password"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-reset-password">POST api/reset-password</h2>

<p>
</p>



<span id="example-requests-POSTapi-reset-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/reset-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"+-0pBNvYgxwmi\\/#iw\",
    \"token\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/reset-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "+-0pBNvYgxwmi\/#iw",
    "token": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-reset-password">
</span>
<span id="execution-results-POSTapi-reset-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-reset-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-reset-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-reset-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-reset-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-reset-password" data-method="POST"
      data-path="api/reset-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-reset-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-reset-password"
                    onclick="tryItOut('POSTapi-reset-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-reset-password"
                    onclick="cancelTryOut('POSTapi-reset-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-reset-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/reset-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-reset-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-reset-password"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-reset-password"
               value="+-0pBNvYgxwmi/#iw"
               data-component="body">
    <br>
<p>Must be at least 4 characters. Example: <code>+-0pBNvYgxwmi/#iw</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>token</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="token"                data-endpoint="POSTapi-reset-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-resend-email">GET api/resend-email</h2>

<p>
</p>



<span id="example-requests-GETapi-resend-email">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/resend-email" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/resend-email"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-resend-email">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-resend-email" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-resend-email"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-resend-email"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-resend-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-resend-email">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-resend-email" data-method="GET"
      data-path="api/resend-email"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-resend-email', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-resend-email"
                    onclick="tryItOut('GETapi-resend-email');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-resend-email"
                    onclick="cancelTryOut('GETapi-resend-email');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-resend-email"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/resend-email</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-resend-email"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-resend-email"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-verify-email">GET api/verify-email</h2>

<p>
</p>



<span id="example-requests-GETapi-verify-email">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/verify-email" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/verify-email"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-verify-email">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-verify-email" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-verify-email"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-verify-email"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-verify-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-verify-email">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-verify-email" data-method="GET"
      data-path="api/verify-email"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-verify-email', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-verify-email"
                    onclick="tryItOut('GETapi-verify-email');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-verify-email"
                    onclick="cancelTryOut('GETapi-verify-email');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-verify-email"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/verify-email</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-verify-email"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-verify-email"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-google-redirect">GET api/google/redirect</h2>

<p>
</p>



<span id="example-requests-GETapi-google-redirect">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/google/redirect" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/google/redirect"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-google-redirect">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;url&quot;: &quot;https://accounts.google.com/o/oauth2/v2/auth?response_type=code&amp;access_type=offline&amp;client_id=225052266942-u379026b7u3ur0h7ip383ltpm8hvoesg.apps.googleusercontent.com&amp;redirect_uri=http%3A%2F%2Flocalhost%3A8000%2Fapi%2Fgoogle%2Fcallback&amp;state=eyJpdiI6IkNzOWEwUndZWTJGZFlNU2Z0RmpZYlE9PSIsInZhbHVlIjoibTRWbkFyeVFkMDJXZVMvTTlDdkc2U0VRRmNjOGpYS044TjQ4aVFxeXNXYz0iLCJtYWMiOiJiMjc0MmFiZDdlZTBhZWU3NWVkZjllN2IxNzYzMmY4ZGYxMTZkNmQ4ZjQ4Y2FiYzk3MTEzNmQxN2Y3MjQxNTA1IiwidGFnIjoiIn0%3D&amp;scope=openid%20email%20profile%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fcalendar.events&amp;prompt=consent&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-google-redirect" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-google-redirect"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-google-redirect"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-google-redirect" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-google-redirect">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-google-redirect" data-method="GET"
      data-path="api/google/redirect"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-google-redirect', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-google-redirect"
                    onclick="tryItOut('GETapi-google-redirect');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-google-redirect"
                    onclick="cancelTryOut('GETapi-google-redirect');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-google-redirect"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/google/redirect</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-google-redirect"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-google-redirect"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-google-callback">GET api/google/callback</h2>

<p>
</p>



<span id="example-requests-GETapi-google-callback">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/google/callback" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/google/callback"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-google-callback">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-google-callback" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-google-callback"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-google-callback"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-google-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-google-callback">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-google-callback" data-method="GET"
      data-path="api/google/callback"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-google-callback', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-google-callback"
                    onclick="tryItOut('GETapi-google-callback');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-google-callback"
                    onclick="cancelTryOut('GETapi-google-callback');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-google-callback"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/google/callback</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-google-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-google-callback"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-connections-google-redirect">GET api/connections/google/redirect</h2>

<p>
</p>



<span id="example-requests-GETapi-connections-google-redirect">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/connections/google/redirect" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/connections/google/redirect"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-connections-google-redirect">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-connections-google-redirect" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-connections-google-redirect"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-connections-google-redirect"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-connections-google-redirect" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-connections-google-redirect">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-connections-google-redirect" data-method="GET"
      data-path="api/connections/google/redirect"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-connections-google-redirect', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-connections-google-redirect"
                    onclick="tryItOut('GETapi-connections-google-redirect');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-connections-google-redirect"
                    onclick="cancelTryOut('GETapi-connections-google-redirect');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-connections-google-redirect"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/connections/google/redirect</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-connections-google-redirect"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-connections-google-redirect"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-public-profile">GET api/public/profile</h2>

<p>
</p>



<span id="example-requests-GETapi-public-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/public/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"username\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/public/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-public-profile">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;User not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-public-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-public-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-public-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-public-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-public-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-public-profile" data-method="GET"
      data-path="api/public/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-public-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-public-profile"
                    onclick="tryItOut('GETapi-public-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-public-profile"
                    onclick="cancelTryOut('GETapi-public-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-public-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/public/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-public-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-public-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="username"                data-endpoint="GETapi-public-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-public--username--events">GET api/public/{username}/events</h2>

<p>
</p>



<span id="example-requests-GETapi-public--username--events">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/public/architecto/events" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/public/architecto/events"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-public--username--events">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;User not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-public--username--events" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-public--username--events"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-public--username--events"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-public--username--events" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-public--username--events">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-public--username--events" data-method="GET"
      data-path="api/public/{username}/events"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-public--username--events', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-public--username--events"
                    onclick="tryItOut('GETapi-public--username--events');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-public--username--events"
                    onclick="cancelTryOut('GETapi-public--username--events');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-public--username--events"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/public/{username}/events</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-public--username--events"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-public--username--events"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="username"                data-endpoint="GETapi-public--username--events"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-public-events--event_id--schedule">GET api/public/events/{event_id}/schedule</h2>

<p>
</p>



<span id="example-requests-GETapi-public-events--event_id--schedule">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/public/events/14/schedule" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"month\": \"2026-10\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/public/events/14/schedule"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "month": "2026-10"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-public-events--event_id--schedule">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Schedule fetched successfully&quot;,
    &quot;schedules&quot;: {
        &quot;2026-10-01&quot;: [],
        &quot;2026-10-02&quot;: [
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-03&quot;: [
            {
                &quot;time&quot;: &quot;08:25&quot;
            },
            {
                &quot;time&quot;: &quot;08:30&quot;
            },
            {
                &quot;time&quot;: &quot;08:35&quot;
            },
            {
                &quot;time&quot;: &quot;08:40&quot;
            },
            {
                &quot;time&quot;: &quot;08:45&quot;
            },
            {
                &quot;time&quot;: &quot;08:50&quot;
            },
            {
                &quot;time&quot;: &quot;08:55&quot;
            },
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;
            },
            {
                &quot;time&quot;: &quot;21:05&quot;
            },
            {
                &quot;time&quot;: &quot;21:10&quot;
            },
            {
                &quot;time&quot;: &quot;21:15&quot;
            },
            {
                &quot;time&quot;: &quot;21:20&quot;
            },
            {
                &quot;time&quot;: &quot;21:25&quot;
            },
            {
                &quot;time&quot;: &quot;21:30&quot;
            },
            {
                &quot;time&quot;: &quot;21:35&quot;
            },
            {
                &quot;time&quot;: &quot;21:40&quot;
            },
            {
                &quot;time&quot;: &quot;21:45&quot;
            },
            {
                &quot;time&quot;: &quot;21:50&quot;
            },
            {
                &quot;time&quot;: &quot;21:55&quot;
            },
            {
                &quot;time&quot;: &quot;22:00&quot;
            }
        ],
        &quot;2026-10-04&quot;: [],
        &quot;2026-10-05&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-06&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-07&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-08&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-09&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-10&quot;: [
            {
                &quot;time&quot;: &quot;07:00&quot;
            },
            {
                &quot;time&quot;: &quot;07:05&quot;
            },
            {
                &quot;time&quot;: &quot;07:10&quot;
            },
            {
                &quot;time&quot;: &quot;07:15&quot;
            },
            {
                &quot;time&quot;: &quot;07:20&quot;
            },
            {
                &quot;time&quot;: &quot;07:25&quot;
            },
            {
                &quot;time&quot;: &quot;07:30&quot;
            },
            {
                &quot;time&quot;: &quot;07:35&quot;
            },
            {
                &quot;time&quot;: &quot;07:40&quot;
            },
            {
                &quot;time&quot;: &quot;07:45&quot;
            },
            {
                &quot;time&quot;: &quot;07:50&quot;
            },
            {
                &quot;time&quot;: &quot;07:55&quot;
            },
            {
                &quot;time&quot;: &quot;08:00&quot;
            },
            {
                &quot;time&quot;: &quot;08:05&quot;
            },
            {
                &quot;time&quot;: &quot;08:10&quot;
            },
            {
                &quot;time&quot;: &quot;08:15&quot;
            },
            {
                &quot;time&quot;: &quot;08:20&quot;
            },
            {
                &quot;time&quot;: &quot;08:25&quot;
            },
            {
                &quot;time&quot;: &quot;08:30&quot;
            },
            {
                &quot;time&quot;: &quot;08:35&quot;
            },
            {
                &quot;time&quot;: &quot;08:40&quot;
            },
            {
                &quot;time&quot;: &quot;08:45&quot;
            },
            {
                &quot;time&quot;: &quot;08:50&quot;
            },
            {
                &quot;time&quot;: &quot;08:55&quot;
            },
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;
            },
            {
                &quot;time&quot;: &quot;21:05&quot;
            },
            {
                &quot;time&quot;: &quot;21:10&quot;
            },
            {
                &quot;time&quot;: &quot;21:15&quot;
            },
            {
                &quot;time&quot;: &quot;21:20&quot;
            },
            {
                &quot;time&quot;: &quot;21:25&quot;
            },
            {
                &quot;time&quot;: &quot;21:30&quot;
            },
            {
                &quot;time&quot;: &quot;21:35&quot;
            },
            {
                &quot;time&quot;: &quot;21:40&quot;
            },
            {
                &quot;time&quot;: &quot;21:45&quot;
            },
            {
                &quot;time&quot;: &quot;21:50&quot;
            },
            {
                &quot;time&quot;: &quot;21:55&quot;
            },
            {
                &quot;time&quot;: &quot;22:00&quot;
            }
        ],
        &quot;2026-10-11&quot;: [],
        &quot;2026-10-12&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-13&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-14&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-15&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-16&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-17&quot;: [
            {
                &quot;time&quot;: &quot;08:05&quot;
            },
            {
                &quot;time&quot;: &quot;08:10&quot;
            },
            {
                &quot;time&quot;: &quot;08:15&quot;
            },
            {
                &quot;time&quot;: &quot;08:20&quot;
            },
            {
                &quot;time&quot;: &quot;08:25&quot;
            },
            {
                &quot;time&quot;: &quot;08:30&quot;
            },
            {
                &quot;time&quot;: &quot;08:35&quot;
            },
            {
                &quot;time&quot;: &quot;08:40&quot;
            },
            {
                &quot;time&quot;: &quot;08:45&quot;
            },
            {
                &quot;time&quot;: &quot;08:50&quot;
            },
            {
                &quot;time&quot;: &quot;08:55&quot;
            },
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;
            },
            {
                &quot;time&quot;: &quot;21:05&quot;
            },
            {
                &quot;time&quot;: &quot;21:10&quot;
            },
            {
                &quot;time&quot;: &quot;21:15&quot;
            },
            {
                &quot;time&quot;: &quot;21:20&quot;
            },
            {
                &quot;time&quot;: &quot;21:25&quot;
            },
            {
                &quot;time&quot;: &quot;21:30&quot;
            },
            {
                &quot;time&quot;: &quot;21:35&quot;
            },
            {
                &quot;time&quot;: &quot;21:40&quot;
            },
            {
                &quot;time&quot;: &quot;21:45&quot;
            },
            {
                &quot;time&quot;: &quot;21:50&quot;
            },
            {
                &quot;time&quot;: &quot;21:55&quot;
            },
            {
                &quot;time&quot;: &quot;22:00&quot;
            }
        ],
        &quot;2026-10-18&quot;: [],
        &quot;2026-10-19&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-20&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-21&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-22&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-23&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-24&quot;: [
            {
                &quot;time&quot;: &quot;07:00&quot;
            },
            {
                &quot;time&quot;: &quot;07:05&quot;
            },
            {
                &quot;time&quot;: &quot;07:10&quot;
            },
            {
                &quot;time&quot;: &quot;07:15&quot;
            },
            {
                &quot;time&quot;: &quot;07:20&quot;
            },
            {
                &quot;time&quot;: &quot;07:25&quot;
            },
            {
                &quot;time&quot;: &quot;07:30&quot;
            },
            {
                &quot;time&quot;: &quot;07:35&quot;
            },
            {
                &quot;time&quot;: &quot;07:40&quot;
            },
            {
                &quot;time&quot;: &quot;07:45&quot;
            },
            {
                &quot;time&quot;: &quot;07:50&quot;
            },
            {
                &quot;time&quot;: &quot;07:55&quot;
            },
            {
                &quot;time&quot;: &quot;08:00&quot;
            },
            {
                &quot;time&quot;: &quot;08:05&quot;
            },
            {
                &quot;time&quot;: &quot;08:10&quot;
            },
            {
                &quot;time&quot;: &quot;08:15&quot;
            },
            {
                &quot;time&quot;: &quot;08:20&quot;
            },
            {
                &quot;time&quot;: &quot;08:25&quot;
            },
            {
                &quot;time&quot;: &quot;08:30&quot;
            },
            {
                &quot;time&quot;: &quot;08:35&quot;
            },
            {
                &quot;time&quot;: &quot;08:40&quot;
            },
            {
                &quot;time&quot;: &quot;08:45&quot;
            },
            {
                &quot;time&quot;: &quot;08:50&quot;
            },
            {
                &quot;time&quot;: &quot;08:55&quot;
            },
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;
            },
            {
                &quot;time&quot;: &quot;21:05&quot;
            },
            {
                &quot;time&quot;: &quot;21:10&quot;
            },
            {
                &quot;time&quot;: &quot;21:15&quot;
            },
            {
                &quot;time&quot;: &quot;21:20&quot;
            },
            {
                &quot;time&quot;: &quot;21:25&quot;
            },
            {
                &quot;time&quot;: &quot;21:30&quot;
            },
            {
                &quot;time&quot;: &quot;21:35&quot;
            },
            {
                &quot;time&quot;: &quot;21:40&quot;
            },
            {
                &quot;time&quot;: &quot;21:45&quot;
            },
            {
                &quot;time&quot;: &quot;21:50&quot;
            },
            {
                &quot;time&quot;: &quot;21:55&quot;
            },
            {
                &quot;time&quot;: &quot;22:00&quot;
            }
        ],
        &quot;2026-10-25&quot;: [],
        &quot;2026-10-26&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-27&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-28&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-29&quot;: [
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-30&quot;: [
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            }
        ],
        &quot;2026-10-31&quot;: [
            {
                &quot;time&quot;: &quot;08:05&quot;
            },
            {
                &quot;time&quot;: &quot;08:10&quot;
            },
            {
                &quot;time&quot;: &quot;08:15&quot;
            },
            {
                &quot;time&quot;: &quot;08:20&quot;
            },
            {
                &quot;time&quot;: &quot;08:25&quot;
            },
            {
                &quot;time&quot;: &quot;08:30&quot;
            },
            {
                &quot;time&quot;: &quot;08:35&quot;
            },
            {
                &quot;time&quot;: &quot;08:40&quot;
            },
            {
                &quot;time&quot;: &quot;08:45&quot;
            },
            {
                &quot;time&quot;: &quot;08:50&quot;
            },
            {
                &quot;time&quot;: &quot;08:55&quot;
            },
            {
                &quot;time&quot;: &quot;09:00&quot;
            },
            {
                &quot;time&quot;: &quot;09:05&quot;
            },
            {
                &quot;time&quot;: &quot;09:10&quot;
            },
            {
                &quot;time&quot;: &quot;09:15&quot;
            },
            {
                &quot;time&quot;: &quot;09:20&quot;
            },
            {
                &quot;time&quot;: &quot;09:25&quot;
            },
            {
                &quot;time&quot;: &quot;09:30&quot;
            },
            {
                &quot;time&quot;: &quot;09:35&quot;
            },
            {
                &quot;time&quot;: &quot;09:40&quot;
            },
            {
                &quot;time&quot;: &quot;09:45&quot;
            },
            {
                &quot;time&quot;: &quot;09:50&quot;
            },
            {
                &quot;time&quot;: &quot;09:55&quot;
            },
            {
                &quot;time&quot;: &quot;10:00&quot;
            },
            {
                &quot;time&quot;: &quot;10:05&quot;
            },
            {
                &quot;time&quot;: &quot;10:10&quot;
            },
            {
                &quot;time&quot;: &quot;10:15&quot;
            },
            {
                &quot;time&quot;: &quot;10:20&quot;
            },
            {
                &quot;time&quot;: &quot;10:25&quot;
            },
            {
                &quot;time&quot;: &quot;10:30&quot;
            },
            {
                &quot;time&quot;: &quot;10:35&quot;
            },
            {
                &quot;time&quot;: &quot;10:40&quot;
            },
            {
                &quot;time&quot;: &quot;10:45&quot;
            },
            {
                &quot;time&quot;: &quot;10:50&quot;
            },
            {
                &quot;time&quot;: &quot;10:55&quot;
            },
            {
                &quot;time&quot;: &quot;11:00&quot;
            },
            {
                &quot;time&quot;: &quot;11:05&quot;
            },
            {
                &quot;time&quot;: &quot;11:10&quot;
            },
            {
                &quot;time&quot;: &quot;11:15&quot;
            },
            {
                &quot;time&quot;: &quot;11:20&quot;
            },
            {
                &quot;time&quot;: &quot;11:25&quot;
            },
            {
                &quot;time&quot;: &quot;11:30&quot;
            },
            {
                &quot;time&quot;: &quot;11:35&quot;
            },
            {
                &quot;time&quot;: &quot;11:40&quot;
            },
            {
                &quot;time&quot;: &quot;11:45&quot;
            },
            {
                &quot;time&quot;: &quot;11:50&quot;
            },
            {
                &quot;time&quot;: &quot;11:55&quot;
            },
            {
                &quot;time&quot;: &quot;12:00&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;
            },
            {
                &quot;time&quot;: &quot;21:05&quot;
            },
            {
                &quot;time&quot;: &quot;21:10&quot;
            },
            {
                &quot;time&quot;: &quot;21:15&quot;
            },
            {
                &quot;time&quot;: &quot;21:20&quot;
            },
            {
                &quot;time&quot;: &quot;21:25&quot;
            },
            {
                &quot;time&quot;: &quot;21:30&quot;
            },
            {
                &quot;time&quot;: &quot;21:35&quot;
            },
            {
                &quot;time&quot;: &quot;21:40&quot;
            },
            {
                &quot;time&quot;: &quot;21:45&quot;
            },
            {
                &quot;time&quot;: &quot;21:50&quot;
            },
            {
                &quot;time&quot;: &quot;21:55&quot;
            },
            {
                &quot;time&quot;: &quot;22:00&quot;
            }
        ]
    },
    &quot;pagination&quot;: {
        &quot;month&quot;: &quot;2026-10&quot;,
        &quot;previous_month&quot;: &quot;2026-09&quot;,
        &quot;next_month&quot;: &quot;2026-11&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-public-events--event_id--schedule" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-public-events--event_id--schedule"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-public-events--event_id--schedule"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-public-events--event_id--schedule" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-public-events--event_id--schedule">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-public-events--event_id--schedule" data-method="GET"
      data-path="api/public/events/{event_id}/schedule"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-public-events--event_id--schedule', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-public-events--event_id--schedule"
                    onclick="tryItOut('GETapi-public-events--event_id--schedule');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-public-events--event_id--schedule"
                    onclick="cancelTryOut('GETapi-public-events--event_id--schedule');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-public-events--event_id--schedule"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/public/events/{event_id}/schedule</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-public-events--event_id--schedule"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-public-events--event_id--schedule"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>event_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="event_id"                data-endpoint="GETapi-public-events--event_id--schedule"
               value="14"
               data-component="url">
    <br>
<p>The ID of the event. Example: <code>14</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>month</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="month"                data-endpoint="GETapi-public-events--event_id--schedule"
               value="2026-10"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>Y-m</code>. Example: <code>2026-10</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-public-schedule">POST api/public/schedule</h2>

<p>
</p>



<span id="example-requests-POSTapi-public-schedule">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/public/schedule" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"username\": \"architecto\",
    \"date\": \"2026-10-02\",
    \"starts_at\": \"15:20\",
    \"ends_at\": \"15:20\",
    \"notes\": \"architecto\",
    \"event_id\": \"architecto\",
    \"guests\": [
        {
            \"name\": \"architecto\",
            \"email\": \"zbailey@example.net\",
            \"attendance_status\": \"cancelled\"
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/public/schedule"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "architecto",
    "date": "2026-10-02",
    "starts_at": "15:20",
    "ends_at": "15:20",
    "notes": "architecto",
    "event_id": "architecto",
    "guests": [
        {
            "name": "architecto",
            "email": "zbailey@example.net",
            "attendance_status": "cancelled"
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-public-schedule">
</span>
<span id="execution-results-POSTapi-public-schedule" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-public-schedule"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-public-schedule"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-public-schedule" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-public-schedule">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-public-schedule" data-method="POST"
      data-path="api/public/schedule"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-public-schedule', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-public-schedule"
                    onclick="tryItOut('POSTapi-public-schedule');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-public-schedule"
                    onclick="cancelTryOut('POSTapi-public-schedule');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-public-schedule"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/public/schedule</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-public-schedule"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-public-schedule"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="username"                data-endpoint="POSTapi-public-schedule"
               value="architecto"
               data-component="body">
    <br>
<p>Must match an existing stored value. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date"                data-endpoint="POSTapi-public-schedule"
               value="2026-10-02"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>Y-m-d</code>. Example: <code>2026-10-02</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>starts_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="starts_at"                data-endpoint="POSTapi-public-schedule"
               value="15:20"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>15:20</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ends_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ends_at"                data-endpoint="POSTapi-public-schedule"
               value="15:20"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>15:20</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-public-schedule"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>event_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="event_id"                data-endpoint="POSTapi-public-schedule"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>guests</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="guests.0.name"                data-endpoint="POSTapi-public-schedule"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="guests.0.email"                data-endpoint="POSTapi-public-schedule"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>zbailey@example.net</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>attendance_status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="guests.0.attendance_status"                data-endpoint="POSTapi-public-schedule"
               value="cancelled"
               data-component="body">
    <br>
<p>Example: <code>cancelled</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>confirmed</code></li> <li><code>cancelled</code></li></ul>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-bookings-details--id-">GET api/bookings/details/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-bookings-details--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/bookings/details/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/bookings/details/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bookings-details--id-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bookings-details--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bookings-details--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bookings-details--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bookings-details--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bookings-details--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bookings-details--id-" data-method="GET"
      data-path="api/bookings/details/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bookings-details--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bookings-details--id-"
                    onclick="tryItOut('GETapi-bookings-details--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bookings-details--id-"
                    onclick="cancelTryOut('GETapi-bookings-details--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bookings-details--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bookings/details/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bookings-details--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bookings-details--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-bookings-details--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the detail. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-guest--email-">GET api/guest/{email}</h2>

<p>
</p>



<span id="example-requests-GETapi-guest--email-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/guest/gbailey@example.net" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/guest/gbailey@example.net"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-guest--email-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Guest not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-guest--email-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-guest--email-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-guest--email-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-guest--email-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-guest--email-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-guest--email-" data-method="GET"
      data-path="api/guest/{email}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-guest--email-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-guest--email-"
                    onclick="tryItOut('GETapi-guest--email-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-guest--email-"
                    onclick="cancelTryOut('GETapi-guest--email-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-guest--email-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/guest/{email}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-guest--email-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-guest--email-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="GETapi-guest--email-"
               value="gbailey@example.net"
               data-component="url">
    <br>
<p>Example: <code>gbailey@example.net</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-guests">GET api/guests</h2>

<p>
</p>



<span id="example-requests-GETapi-guests">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/guests" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/guests"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-guests">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Guests fetched successfully&quot;,
    &quot;guests&quot;: {
        &quot;pendingAttributes&quot;: []
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-guests" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-guests"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-guests"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-guests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-guests">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-guests" data-method="GET"
      data-path="api/guests"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-guests', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-guests"
                    onclick="tryItOut('GETapi-guests');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-guests"
                    onclick="cancelTryOut('GETapi-guests');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-guests"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/guests</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-guests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-guests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-guests">POST api/guests</h2>

<p>
</p>



<span id="example-requests-POSTapi-guests">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/guests" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"booking_id\": \"architecto\",
    \"guests\": [
        {
            \"name\": \"architecto\",
            \"email\": \"zbailey@example.net\",
            \"attendance_status\": \"confirmed\"
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/guests"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "booking_id": "architecto",
    "guests": [
        {
            "name": "architecto",
            "email": "zbailey@example.net",
            "attendance_status": "confirmed"
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-guests">
</span>
<span id="execution-results-POSTapi-guests" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-guests"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-guests"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-guests" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-guests">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-guests" data-method="POST"
      data-path="api/guests"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-guests', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-guests"
                    onclick="tryItOut('POSTapi-guests');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-guests"
                    onclick="cancelTryOut('POSTapi-guests');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-guests"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/guests</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-guests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-guests"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>booking_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="booking_id"                data-endpoint="POSTapi-guests"
               value="architecto"
               data-component="body">
    <br>
<p>Must match an existing stored value. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>guests</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="guests.0.name"                data-endpoint="POSTapi-guests"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="guests.0.email"                data-endpoint="POSTapi-guests"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>zbailey@example.net</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>attendance_status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="guests.0.attendance_status"                data-endpoint="POSTapi-guests"
               value="confirmed"
               data-component="body">
    <br>
<p>Example: <code>confirmed</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>confirmed</code></li> <li><code>cancelled</code></li></ul>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-guests--id-">PUT api/guests/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-guests--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:3000/api/guests/6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"architecto\",
    \"email\": \"zbailey@example.net\",
    \"attendance_status\": \"confirmed\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/guests/6"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "email": "zbailey@example.net",
    "attendance_status": "confirmed"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-guests--id-">
</span>
<span id="execution-results-PUTapi-guests--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-guests--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-guests--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-guests--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-guests--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-guests--id-" data-method="PUT"
      data-path="api/guests/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-guests--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-guests--id-"
                    onclick="tryItOut('PUTapi-guests--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-guests--id-"
                    onclick="cancelTryOut('PUTapi-guests--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-guests--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/guests/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/guests/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-guests--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-guests--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-guests--id-"
               value="6"
               data-component="url">
    <br>
<p>The ID of the guest. Example: <code>6</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-guests--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-guests--id-"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>attendance_status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="attendance_status"                data-endpoint="PUTapi-guests--id-"
               value="confirmed"
               data-component="body">
    <br>
<p>Example: <code>confirmed</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>confirmed</code></li> <li><code>cancelled</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-guests--id-">DELETE api/guests/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-guests--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:3000/api/guests/6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/guests/6"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-guests--id-">
</span>
<span id="execution-results-DELETEapi-guests--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-guests--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-guests--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-guests--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-guests--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-guests--id-" data-method="DELETE"
      data-path="api/guests/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-guests--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-guests--id-"
                    onclick="tryItOut('DELETEapi-guests--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-guests--id-"
                    onclick="cancelTryOut('DELETEapi-guests--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-guests--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/guests/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-guests--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-guests--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-guests--id-"
               value="6"
               data-component="url">
    <br>
<p>The ID of the guest. Example: <code>6</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-users-me">GET api/users/me</h2>

<p>
</p>



<span id="example-requests-GETapi-users-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/users/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/users/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users-me">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users-me" data-method="GET"
      data-path="api/users/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users-me"
                    onclick="tryItOut('GETapi-users-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users-me"
                    onclick="cancelTryOut('GETapi-users-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-users-check-username">GET api/users/check-username</h2>

<p>
</p>



<span id="example-requests-GETapi-users-check-username">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/users/check-username" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/users/check-username"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users-check-username">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users-check-username" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users-check-username"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-check-username"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users-check-username" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-check-username">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users-check-username" data-method="GET"
      data-path="api/users/check-username"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users-check-username', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users-check-username"
                    onclick="tryItOut('GETapi-users-check-username');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users-check-username"
                    onclick="cancelTryOut('GETapi-users-check-username');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users-check-username"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/check-username</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users-check-username"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users-check-username"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PATCHapi-users-edit-profile">PATCH api/users/edit-profile</h2>

<p>
</p>



<span id="example-requests-PATCHapi-users-edit-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:3000/api/users/edit-profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"architecto\",
    \"avatar_url\": \"http:\\/\\/www.bailey.biz\\/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html\",
    \"username\": \"ikhwaykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsau\",
    \"description\": \"Eius et animi quos velit et.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/users/edit-profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "avatar_url": "http:\/\/www.bailey.biz\/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html",
    "username": "ikhwaykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsau",
    "description": "Eius et animi quos velit et."
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-users-edit-profile">
</span>
<span id="execution-results-PATCHapi-users-edit-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-users-edit-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-users-edit-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-users-edit-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-users-edit-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-users-edit-profile" data-method="PATCH"
      data-path="api/users/edit-profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-users-edit-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-users-edit-profile"
                    onclick="tryItOut('PATCHapi-users-edit-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-users-edit-profile"
                    onclick="cancelTryOut('PATCHapi-users-edit-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-users-edit-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/users/edit-profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-users-edit-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-users-edit-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PATCHapi-users-edit-profile"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>avatar_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="avatar_url"                data-endpoint="PATCHapi-users-edit-profile"
               value="http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html"
               data-component="body">
    <br>
<p>Example: <code>http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="username"                data-endpoint="PATCHapi-users-edit-profile"
               value="ikhwaykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsau"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Example: <code>ikhwaykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsau</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PATCHapi-users-edit-profile"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-users-change-password">PATCH api/users/change-password</h2>

<p>
</p>



<span id="example-requests-PATCHapi-users-change-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:3000/api/users/change-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"architecto\",
    \"avatar_url\": \"http:\\/\\/www.bailey.biz\\/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html\",
    \"username\": \"ikhwaykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsau\",
    \"description\": \"Eius et animi quos velit et.\",
    \"old_password\": \"architecto\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/users/change-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "avatar_url": "http:\/\/www.bailey.biz\/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html",
    "username": "ikhwaykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsau",
    "description": "Eius et animi quos velit et.",
    "old_password": "architecto",
    "password": "architecto"
};

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-users-change-password">
</span>
<span id="execution-results-PATCHapi-users-change-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-users-change-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-users-change-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-users-change-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-users-change-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-users-change-password" data-method="PATCH"
      data-path="api/users/change-password"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-users-change-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-users-change-password"
                    onclick="tryItOut('PATCHapi-users-change-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-users-change-password"
                    onclick="cancelTryOut('PATCHapi-users-change-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-users-change-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/users/change-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-users-change-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-users-change-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PATCHapi-users-change-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>avatar_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="avatar_url"                data-endpoint="PATCHapi-users-change-password"
               value="http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html"
               data-component="body">
    <br>
<p>Example: <code>http://www.bailey.biz/quos-velit-et-fugiat-sunt-nihil-accusantium-harum.html</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>username</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="username"                data-endpoint="PATCHapi-users-change-password"
               value="ikhwaykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsau"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Example: <code>ikhwaykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsau</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PATCHapi-users-change-password"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>old_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="old_password"                data-endpoint="PATCHapi-users-change-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="PATCHapi-users-change-password"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PATCHapi-users-complete-onboarding">PATCH api/users/complete-onboarding</h2>

<p>
</p>



<span id="example-requests-PATCHapi-users-complete-onboarding">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:3000/api/users/complete-onboarding" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/users/complete-onboarding"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-users-complete-onboarding">
</span>
<span id="execution-results-PATCHapi-users-complete-onboarding" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-users-complete-onboarding"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-users-complete-onboarding"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-users-complete-onboarding" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-users-complete-onboarding">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-users-complete-onboarding" data-method="PATCH"
      data-path="api/users/complete-onboarding"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-users-complete-onboarding', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-users-complete-onboarding"
                    onclick="tryItOut('PATCHapi-users-complete-onboarding');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-users-complete-onboarding"
                    onclick="cancelTryOut('PATCHapi-users-complete-onboarding');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-users-complete-onboarding"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/users/complete-onboarding</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-users-complete-onboarding"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-users-complete-onboarding"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-availability">GET api/availability</h2>

<p>
</p>



<span id="example-requests-GETapi-availability">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/availability" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/availability"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-availability">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-availability" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-availability"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-availability"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-availability" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-availability">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-availability" data-method="GET"
      data-path="api/availability"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-availability', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-availability"
                    onclick="tryItOut('GETapi-availability');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-availability"
                    onclick="cancelTryOut('GETapi-availability');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-availability"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/availability</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-availability"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-availability"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-availability">POST api/availability</h2>

<p>
</p>



<span id="example-requests-POSTapi-availability">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/availability" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"day\": \"thursday\",
    \"start_time\": \"15:20\",
    \"end_time\": \"15:20\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/availability"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "day": "thursday",
    "start_time": "15:20",
    "end_time": "15:20"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-availability">
</span>
<span id="execution-results-POSTapi-availability" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-availability"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-availability"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-availability" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-availability">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-availability" data-method="POST"
      data-path="api/availability"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-availability', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-availability"
                    onclick="tryItOut('POSTapi-availability');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-availability"
                    onclick="cancelTryOut('POSTapi-availability');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-availability"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/availability</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-availability"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-availability"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>day</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="day"                data-endpoint="POSTapi-availability"
               value="thursday"
               data-component="body">
    <br>
<p>Example: <code>thursday</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>sunday</code></li> <li><code>monday</code></li> <li><code>tuesday</code></li> <li><code>wednesday</code></li> <li><code>thursday</code></li> <li><code>friday</code></li> <li><code>saturday</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="POSTapi-availability"
               value="15:20"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>15:20</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="POSTapi-availability"
               value="15:20"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>15:20</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-availability--id-">PUT api/availability/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-availability--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:3000/api/availability/6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"day\": \"thursday\",
    \"start_time\": \"15:20\",
    \"end_time\": \"15:20\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/availability/6"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "day": "thursday",
    "start_time": "15:20",
    "end_time": "15:20"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-availability--id-">
</span>
<span id="execution-results-PUTapi-availability--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-availability--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-availability--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-availability--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-availability--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-availability--id-" data-method="PUT"
      data-path="api/availability/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-availability--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-availability--id-"
                    onclick="tryItOut('PUTapi-availability--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-availability--id-"
                    onclick="cancelTryOut('PUTapi-availability--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-availability--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/availability/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/availability/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-availability--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-availability--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-availability--id-"
               value="6"
               data-component="url">
    <br>
<p>The ID of the availability. Example: <code>6</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>day</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="day"                data-endpoint="PUTapi-availability--id-"
               value="thursday"
               data-component="body">
    <br>
<p>Example: <code>thursday</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>sunday</code></li> <li><code>monday</code></li> <li><code>tuesday</code></li> <li><code>wednesday</code></li> <li><code>thursday</code></li> <li><code>friday</code></li> <li><code>saturday</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_time"                data-endpoint="PUTapi-availability--id-"
               value="15:20"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>15:20</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="PUTapi-availability--id-"
               value="15:20"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>15:20</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-availability--id-">DELETE api/availability/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-availability--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:3000/api/availability/6" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/availability/6"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-availability--id-">
</span>
<span id="execution-results-DELETEapi-availability--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-availability--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-availability--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-availability--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-availability--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-availability--id-" data-method="DELETE"
      data-path="api/availability/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-availability--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-availability--id-"
                    onclick="tryItOut('DELETEapi-availability--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-availability--id-"
                    onclick="cancelTryOut('DELETEapi-availability--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-availability--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/availability/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-availability--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-availability--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-availability--id-"
               value="6"
               data-component="url">
    <br>
<p>The ID of the availability. Example: <code>6</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-connections">GET api/connections</h2>

<p>
</p>



<span id="example-requests-GETapi-connections">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/connections" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/connections"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-connections">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-connections" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-connections"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-connections"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-connections" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-connections">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-connections" data-method="GET"
      data-path="api/connections"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-connections', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-connections"
                    onclick="tryItOut('GETapi-connections');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-connections"
                    onclick="cancelTryOut('GETapi-connections');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-connections"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/connections</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-connections"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-connections"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-links">GET api/links</h2>

<p>
</p>



<span id="example-requests-GETapi-links">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/links" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/links"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-links">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-links" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-links"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-links"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-links" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-links">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-links" data-method="GET"
      data-path="api/links"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-links', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-links"
                    onclick="tryItOut('GETapi-links');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-links"
                    onclick="cancelTryOut('GETapi-links');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-links"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/links</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-links"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-links"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-links--id-">GET api/links/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-links--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/links/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/links/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-links--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-links--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-links--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-links--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-links--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-links--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-links--id-" data-method="GET"
      data-path="api/links/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-links--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-links--id-"
                    onclick="tryItOut('GETapi-links--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-links--id-"
                    onclick="cancelTryOut('GETapi-links--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-links--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/links/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-links--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-links--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-links--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the link. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-links--id-">PUT api/links/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-links--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:3000/api/links/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"bngzmiyvdljnikhw\",
    \"slug\": \"aykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsausgio\",
    \"description\": \"Eius et animi quos velit et.\",
    \"color\": \"architecto\",
    \"status\": \"published\",
    \"duration_minutes\": 16,
    \"is_active\": false,
    \"visibility\": \"private\",
    \"pre_meeting_minutes\": 16,
    \"post_meeting_minutes\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/links/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "bngzmiyvdljnikhw",
    "slug": "aykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsausgio",
    "description": "Eius et animi quos velit et.",
    "color": "architecto",
    "status": "published",
    "duration_minutes": 16,
    "is_active": false,
    "visibility": "private",
    "pre_meeting_minutes": 16,
    "post_meeting_minutes": 16
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-links--id-">
</span>
<span id="execution-results-PUTapi-links--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-links--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-links--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-links--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-links--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-links--id-" data-method="PUT"
      data-path="api/links/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-links--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-links--id-"
                    onclick="tryItOut('PUTapi-links--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-links--id-"
                    onclick="cancelTryOut('PUTapi-links--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-links--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/links/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/links/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-links--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-links--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-links--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the link. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-links--id-"
               value="bngzmiyvdljnikhw"
               data-component="body">
    <br>
<p>Must be at least 4 characters. Must not be greater than 20 characters. Example: <code>bngzmiyvdljnikhw</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="slug"                data-endpoint="PUTapi-links--id-"
               value="aykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsausgio"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Example: <code>aykcmyuwpwlvqwrsitcpscqldzsnrwtujwvlxjklqppwqbewtnnoqitpxntltcvipojsausgio</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-links--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="PUTapi-links--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-links--id-"
               value="published"
               data-component="body">
    <br>
<p>Example: <code>published</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>published</code></li> <li><code>draft</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>duration_minutes</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="duration_minutes"                data-endpoint="PUTapi-links--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-links--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-links--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-links--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-links--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>visibility</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="visibility"                data-endpoint="PUTapi-links--id-"
               value="private"
               data-component="body">
    <br>
<p>Example: <code>private</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>private</code></li> <li><code>public</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>pre_meeting_minutes</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="pre_meeting_minutes"                data-endpoint="PUTapi-links--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>post_meeting_minutes</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="post_meeting_minutes"                data-endpoint="PUTapi-links--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-links--id-">DELETE api/links/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-links--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:3000/api/links/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/links/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-links--id-">
</span>
<span id="execution-results-DELETEapi-links--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-links--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-links--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-links--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-links--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-links--id-" data-method="DELETE"
      data-path="api/links/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-links--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-links--id-"
                    onclick="tryItOut('DELETEapi-links--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-links--id-"
                    onclick="cancelTryOut('DELETEapi-links--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-links--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/links/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-links--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-links--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-links--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the link. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-bookings">GET api/bookings</h2>

<p>
</p>



<span id="example-requests-GETapi-bookings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/bookings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/bookings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bookings">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bookings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bookings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bookings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bookings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bookings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bookings" data-method="GET"
      data-path="api/bookings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bookings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bookings"
                    onclick="tryItOut('GETapi-bookings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bookings"
                    onclick="cancelTryOut('GETapi-bookings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bookings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bookings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-bookings">POST api/bookings</h2>

<p>
</p>



<span id="example-requests-POSTapi-bookings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/bookings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"starts_at\": \"15:20\",
    \"ends_at\": \"15:20\",
    \"notes\": \"architecto\",
    \"event_id\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/bookings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "starts_at": "15:20",
    "ends_at": "15:20",
    "notes": "architecto",
    "event_id": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-bookings">
</span>
<span id="execution-results-POSTapi-bookings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-bookings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-bookings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-bookings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-bookings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-bookings" data-method="POST"
      data-path="api/bookings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-bookings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-bookings"
                    onclick="tryItOut('POSTapi-bookings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-bookings"
                    onclick="cancelTryOut('POSTapi-bookings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-bookings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/bookings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>starts_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="starts_at"                data-endpoint="POSTapi-bookings"
               value="15:20"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>15:20</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ends_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ends_at"                data-endpoint="POSTapi-bookings"
               value="15:20"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>15:20</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-bookings"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>event_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="event_id"                data-endpoint="POSTapi-bookings"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-bookings--id-">GET api/bookings/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-bookings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/bookings/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/bookings/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-bookings--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-bookings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-bookings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-bookings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-bookings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-bookings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-bookings--id-" data-method="GET"
      data-path="api/bookings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-bookings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-bookings--id-"
                    onclick="tryItOut('GETapi-bookings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-bookings--id-"
                    onclick="cancelTryOut('GETapi-bookings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-bookings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/bookings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-bookings--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-bookings--id-">PUT api/bookings/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-bookings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:3000/api/bookings/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"completed\",
    \"starts_at\": \"15:20\",
    \"ends_at\": \"15:20\",
    \"cancellation_reason\": \"architecto\",
    \"notes\": \"architecto\",
    \"event_id\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/bookings/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "completed",
    "starts_at": "15:20",
    "ends_at": "15:20",
    "cancellation_reason": "architecto",
    "notes": "architecto",
    "event_id": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-bookings--id-">
</span>
<span id="execution-results-PUTapi-bookings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-bookings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-bookings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-bookings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-bookings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-bookings--id-" data-method="PUT"
      data-path="api/bookings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-bookings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-bookings--id-"
                    onclick="tryItOut('PUTapi-bookings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-bookings--id-"
                    onclick="cancelTryOut('PUTapi-bookings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-bookings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/bookings/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/bookings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-bookings--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>4</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-bookings--id-"
               value="completed"
               data-component="body">
    <br>
<p>Example: <code>completed</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>confirmed</code></li> <li><code>completed</code></li> <li><code>cancelled</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>starts_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="starts_at"                data-endpoint="PUTapi-bookings--id-"
               value="15:20"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>15:20</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ends_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ends_at"                data-endpoint="PUTapi-bookings--id-"
               value="15:20"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>15:20</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cancellation_reason</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cancellation_reason"                data-endpoint="PUTapi-bookings--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="PUTapi-bookings--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>event_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="event_id"                data-endpoint="PUTapi-bookings--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-bookings--id-">DELETE api/bookings/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-bookings--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:3000/api/bookings/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/bookings/4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-bookings--id-">
</span>
<span id="execution-results-DELETEapi-bookings--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-bookings--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-bookings--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-bookings--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-bookings--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-bookings--id-" data-method="DELETE"
      data-path="api/bookings/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-bookings--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-bookings--id-"
                    onclick="tryItOut('DELETEapi-bookings--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-bookings--id-"
                    onclick="cancelTryOut('DELETEapi-bookings--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-bookings--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/bookings/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-bookings--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-bookings--id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the booking. Example: <code>4</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
