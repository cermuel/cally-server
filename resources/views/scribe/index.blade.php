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
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-automations-templates">
                                <a href="#endpoints-GETapi-automations-templates">GET api/automations/templates</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-automations-variables">
                                <a href="#endpoints-GETapi-automations-variables">GET api/automations/variables</a>
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
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-notifications">
                                <a href="#endpoints-GETapi-notifications">GET api/notifications</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-notifications-unread-count">
                                <a href="#endpoints-GETapi-notifications-unread-count">GET api/notifications/unread-count</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-notifications-test">
                                <a href="#endpoints-GETapi-notifications-test">GET api/notifications/test</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-notifications-read-all">
                                <a href="#endpoints-PATCHapi-notifications-read-all">PATCH api/notifications/read-all</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-notifications--notification_id--read">
                                <a href="#endpoints-PATCHapi-notifications--notification_id--read">PATCH api/notifications/{notification_id}/read</a>
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
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-automations">
                                <a href="#endpoints-GETapi-automations">GET api/automations</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-automations">
                                <a href="#endpoints-POSTapi-automations">POST api/automations</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-automations--id-">
                                <a href="#endpoints-GETapi-automations--id-">GET api/automations/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-automations--id-">
                                <a href="#endpoints-PUTapi-automations--id-">PUT api/automations/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-automations--id-">
                                <a href="#endpoints-DELETEapi-automations--id-">DELETE api/automations/{id}</a>
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
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-contacts-import">
                                <a href="#endpoints-POSTapi-contacts-import">POST api/contacts/import</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-contacts-import-status">
                                <a href="#endpoints-GETapi-contacts-import-status">GET api/contacts/import/status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-contacts-import-template">
                                <a href="#endpoints-GETapi-contacts-import-template">GET api/contacts/import/template</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-contacts-import--import_id-">
                                <a href="#endpoints-DELETEapi-contacts-import--import_id-">DELETE api/contacts/import/{import_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-contacts">
                                <a href="#endpoints-DELETEapi-contacts">DELETE api/contacts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-contacts--contact_id--bookings">
                                <a href="#endpoints-GETapi-contacts--contact_id--bookings">GET api/contacts/{contact_id}/bookings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-contacts--contact_id--bookings">
                                <a href="#endpoints-POSTapi-contacts--contact_id--bookings">POST api/contacts/{contact_id}/bookings</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-contacts">
                                <a href="#endpoints-GETapi-contacts">GET api/contacts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-contacts">
                                <a href="#endpoints-POSTapi-contacts">POST api/contacts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-contacts--id-">
                                <a href="#endpoints-GETapi-contacts--id-">GET api/contacts/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-contacts--id-">
                                <a href="#endpoints-PUTapi-contacts--id-">PUT api/contacts/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-contacts--id-">
                                <a href="#endpoints-DELETEapi-contacts--id-">DELETE api/contacts/{id}</a>
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
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-broadcasting-auth">
                                <a href="#endpoints-GETapi-broadcasting-auth">Authenticate the request for channel access.</a>
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
        <li>Last updated: October 8, 2026</li>
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
    \"password\": \"+-0pBNvYgxwmi\\/#iw\",
    \"timezone\": \"Europe\\/Tirane\"
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
    "password": "+-0pBNvYgxwmi\/#iw",
    "timezone": "Europe\/Tirane"
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
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>timezone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="timezone"                data-endpoint="POSTapi-register"
               value="Europe/Tirane"
               data-component="body">
    <br>
<p>Must be a valid time zone, such as <code>Africa/Accra</code>. Example: <code>Europe/Tirane</code></p>
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
    &quot;url&quot;: &quot;https://accounts.google.com/o/oauth2/v2/auth?response_type=code&amp;access_type=offline&amp;client_id=225052266942-u379026b7u3ur0h7ip383ltpm8hvoesg.apps.googleusercontent.com&amp;redirect_uri=http%3A%2F%2Flocalhost%3A8000%2Fapi%2Fgoogle%2Fcallback&amp;state=eyJpdiI6IjRSV3NXU2NpT0V4L0dFKzltbjBhN0E9PSIsInZhbHVlIjoibDIweE1FN3BvTzFMOUdUbmRMcnBwRS9leWtHNnNmV2h4OUhBTFkxTlFRaz0iLCJtYWMiOiIwMjExNjhlZDI3ODFiMTY0ZmIyMTJmNmMzZTE2OGY5NDRhZWEzNTE3NTc5MWI3NWYyNjU1NzdhMTk2ZTZjZjljIiwidGFnIjoiIn0%3D&amp;scope=openid%20email%20profile%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fcalendar.events&amp;prompt=consent&quot;
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
    \"month\": \"2026-10\",
    \"timezone\": \"Asia\\/Yekaterinburg\"
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
    "month": "2026-10",
    "timezone": "Asia\/Yekaterinburg"
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
        &quot;2026-10-02&quot;: [],
        &quot;2026-10-03&quot;: [],
        &quot;2026-10-04&quot;: [],
        &quot;2026-10-05&quot;: [],
        &quot;2026-10-06&quot;: [],
        &quot;2026-10-07&quot;: [],
        &quot;2026-10-08&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-08T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-08T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-09&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-09T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-09T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-10&quot;: [
            {
                &quot;time&quot;: &quot;13:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T08:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T09:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T08:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T09:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T08:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T09:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T08:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T09:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T08:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T09:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T16:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T17:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T17:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T18:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T18:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T19:55:00.000000Z&quot;
            }
        ],
        &quot;2026-10-11&quot;: [
            {
                &quot;time&quot;: &quot;00:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T19:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T20:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T20:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T21:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T21:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T22:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;03:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-10T22:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-10T23:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-12&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-12T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-12T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-13&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-13T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-13T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-14&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-14T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-14T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-15&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-15T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-15T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-16&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-16T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-16T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-17&quot;: [
            {
                &quot;time&quot;: &quot;13:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T08:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T09:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T08:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T09:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T08:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T09:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T08:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T09:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T08:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T09:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T08:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T09:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T08:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T09:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T08:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T09:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T08:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T09:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T08:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T09:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T08:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T09:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T16:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T17:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T17:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T18:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T18:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T19:55:00.000000Z&quot;
            }
        ],
        &quot;2026-10-18&quot;: [
            {
                &quot;time&quot;: &quot;00:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T19:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T20:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T20:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T21:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T21:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T22:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;03:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-17T22:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-17T23:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-19&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-19T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-19T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-20&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-20T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-20T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-21&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-21T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-21T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-22&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-22T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-22T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-23&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-23T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-23T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-24&quot;: [
            {
                &quot;time&quot;: &quot;12:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;12:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;12:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;12:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;12:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;12:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;12:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;12:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;12:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;12:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;12:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;12:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T07:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T08:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T08:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T09:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T16:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T17:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T17:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T18:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T18:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T19:55:00.000000Z&quot;
            }
        ],
        &quot;2026-10-25&quot;: [
            {
                &quot;time&quot;: &quot;00:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;00:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T19:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T20:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;01:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T20:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T21:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;02:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T21:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T22:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;03:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-24T22:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-24T23:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-26&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-26T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-26T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-27&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-27T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-27T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-28&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-28T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-28T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-29&quot;: [
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-29T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-29T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-30&quot;: [
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-30T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-30T17:00:00.000000Z&quot;
            }
        ],
        &quot;2026-10-31&quot;: [
            {
                &quot;time&quot;: &quot;13:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T08:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T09:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T08:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T09:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T08:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T09:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T08:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T09:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T08:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T09:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T08:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T09:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T08:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T09:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T08:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T09:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T08:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T09:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T08:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T09:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;13:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T08:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T09:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;14:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T09:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T10:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;15:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T10:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T11:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;16:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T11:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T12:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;17:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T12:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T13:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;18:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T13:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T14:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;19:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T14:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T15:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;20:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T15:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T16:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;21:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T16:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T17:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;22:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T17:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T18:55:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:00&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:00:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:00:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:05&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:05:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:05:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:10&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:10:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:10:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:15&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:15:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:15:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:20&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:20:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:20:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:25&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:25:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:25:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:30&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:30:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:30:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:35&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:35:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:35:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:40&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:40:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:40:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:45&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:45:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:45:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:50&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:50:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:50:00.000000Z&quot;
            },
            {
                &quot;time&quot;: &quot;23:55&quot;,
                &quot;starts_at&quot;: &quot;2026-10-31T18:55:00.000000Z&quot;,
                &quot;ends_at&quot;: &quot;2026-10-31T19:55:00.000000Z&quot;
            }
        ]
    },
    &quot;timezone&quot;: &quot;Asia/Yekaterinburg&quot;,
    &quot;host_timezone&quot;: &quot;UTC&quot;,
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
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>timezone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="timezone"                data-endpoint="GETapi-public-events--event_id--schedule"
               value="Asia/Yekaterinburg"
               data-component="body">
    <br>
<p>Must be a valid time zone, such as <code>Africa/Accra</code>. Example: <code>Asia/Yekaterinburg</code></p>
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
    \"date\": \"2026-10-08\",
    \"starts_at\": \"2022-11-01\",
    \"ends_at\": \"2052-10-31\",
    \"timezone\": \"Asia\\/Ulaanbaatar\",
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
    "date": "2026-10-08",
    "starts_at": "2022-11-01",
    "ends_at": "2052-10-31",
    "timezone": "Asia\/Ulaanbaatar",
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
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="date"                data-endpoint="POSTapi-public-schedule"
               value="2026-10-08"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>Y-m-d</code>. Example: <code>2026-10-08</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>starts_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="starts_at"                data-endpoint="POSTapi-public-schedule"
               value="2022-11-01"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date before <code>ends_at</code>. Example: <code>2022-11-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ends_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ends_at"                data-endpoint="POSTapi-public-schedule"
               value="2052-10-31"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>starts_at</code>. Example: <code>2052-10-31</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>timezone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="timezone"                data-endpoint="POSTapi-public-schedule"
               value="Asia/Ulaanbaatar"
               data-component="body">
    <br>
<p>Must be a valid time zone, such as <code>Africa/Accra</code>. Example: <code>Asia/Ulaanbaatar</code></p>
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
            \"attendance_status\": \"cancelled\"
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
    \"attendance_status\": \"cancelled\"
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
    "attendance_status": "cancelled"
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
               value="cancelled"
               data-component="body">
    <br>
<p>Example: <code>cancelled</code></p>
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

                    <h2 id="endpoints-GETapi-automations-templates">GET api/automations/templates</h2>

<p>
</p>



<span id="example-requests-GETapi-automations-templates">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/automations/templates" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/automations/templates"
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

<span id="example-responses-GETapi-automations-templates">
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
    &quot;message&quot;: &quot;Automation templates fetched successfully&quot;,
    &quot;templates&quot;: [
        {
            &quot;key&quot;: &quot;follow_up_email&quot;,
            &quot;name&quot;: &quot;Follow-up email&quot;,
            &quot;description&quot;: &quot;Send a thank-you email after a meeting ends.&quot;,
            &quot;trigger&quot;: &quot;booking.ended&quot;,
            &quot;action&quot;: &quot;send_email&quot;,
            &quot;payload&quot;: {
                &quot;subject&quot;: &quot;Thanks for meeting, {{guest_name}}&quot;,
                &quot;body&quot;: &quot;Hi {{guest_name}},\n\nThanks for joining {{event_name}}. It was great speaking with you.&quot;
            }
        },
        {
            &quot;key&quot;: &quot;no_show_email&quot;,
            &quot;name&quot;: &quot;No-show email&quot;,
            &quot;description&quot;: &quot;Send an email when a guest misses a meeting.&quot;,
            &quot;trigger&quot;: &quot;booking.no_show&quot;,
            &quot;action&quot;: &quot;send_email&quot;,
            &quot;payload&quot;: {
                &quot;subject&quot;: &quot;We missed you at {{event_name}}&quot;,
                &quot;body&quot;: &quot;Hi {{guest_name}},\n\nLooks like you missed {{event_name}}. You can book another time if needed.&quot;
            }
        },
        {
            &quot;key&quot;: &quot;booking_cancelled_email&quot;,
            &quot;name&quot;: &quot;Cancellation email&quot;,
            &quot;description&quot;: &quot;Send a custom message when a booking is cancelled.&quot;,
            &quot;trigger&quot;: &quot;booking.cancelled&quot;,
            &quot;action&quot;: &quot;send_email&quot;,
            &quot;payload&quot;: {
                &quot;subject&quot;: &quot;{{event_name}} was cancelled&quot;,
                &quot;body&quot;: &quot;Hi {{guest_name}},\n\nYour booking for {{event_name}} has been cancelled.&quot;
            }
        },
        {
            &quot;key&quot;: &quot;auto_accept_booking&quot;,
            &quot;name&quot;: &quot;Auto-accept booking&quot;,
            &quot;description&quot;: &quot;Automatically confirm new bookings.&quot;,
            &quot;trigger&quot;: &quot;booking.created&quot;,
            &quot;action&quot;: &quot;auto_accept_booking&quot;,
            &quot;payload&quot;: []
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-automations-templates" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-automations-templates"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-automations-templates"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-automations-templates" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-automations-templates">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-automations-templates" data-method="GET"
      data-path="api/automations/templates"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-automations-templates', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-automations-templates"
                    onclick="tryItOut('GETapi-automations-templates');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-automations-templates"
                    onclick="cancelTryOut('GETapi-automations-templates');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-automations-templates"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/automations/templates</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-automations-templates"
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
                              name="Accept"                data-endpoint="GETapi-automations-templates"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-automations-variables">GET api/automations/variables</h2>

<p>
</p>



<span id="example-requests-GETapi-automations-variables">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/automations/variables" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/automations/variables"
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

<span id="example-responses-GETapi-automations-variables">
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
    &quot;message&quot;: &quot;Automation variables fetched successfully&quot;,
    &quot;templates&quot;: [
        {
            &quot;key&quot;: &quot;guest_name&quot;,
            &quot;label&quot;: &quot;Guest name&quot;,
            &quot;token&quot;: &quot;{{guest_name}}&quot;
        },
        {
            &quot;key&quot;: &quot;guest_email&quot;,
            &quot;label&quot;: &quot;Guest email&quot;,
            &quot;token&quot;: &quot;{{guest_email}}&quot;
        },
        {
            &quot;key&quot;: &quot;event_name&quot;,
            &quot;label&quot;: &quot;Event name&quot;,
            &quot;token&quot;: &quot;{{event_name}}&quot;
        },
        {
            &quot;key&quot;: &quot;starts_at&quot;,
            &quot;label&quot;: &quot;Start time&quot;,
            &quot;token&quot;: &quot;{{starts_at}}&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-automations-variables" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-automations-variables"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-automations-variables"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-automations-variables" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-automations-variables">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-automations-variables" data-method="GET"
      data-path="api/automations/variables"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-automations-variables', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-automations-variables"
                    onclick="tryItOut('GETapi-automations-variables');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-automations-variables"
                    onclick="cancelTryOut('GETapi-automations-variables');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-automations-variables"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/automations/variables</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-automations-variables"
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
                              name="Accept"                data-endpoint="GETapi-automations-variables"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
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
    \"description\": \"Eius et animi quos velit et.\",
    \"timezone\": \"America\\/Caracas\",
    \"notification_preference\": {
        \"booking_created\": {
            \"in_app\": false,
            \"email\": false
        },
        \"booking_cancelled\": {
            \"in_app\": true,
            \"email\": true
        },
        \"booking_rescheduled\": {
            \"in_app\": true,
            \"email\": false
        },
        \"guest_added\": {
            \"in_app\": true,
            \"email\": true
        }
    }
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
    "description": "Eius et animi quos velit et.",
    "timezone": "America\/Caracas",
    "notification_preference": {
        "booking_created": {
            "in_app": false,
            "email": false
        },
        "booking_cancelled": {
            "in_app": true,
            "email": true
        },
        "booking_rescheduled": {
            "in_app": true,
            "email": false
        },
        "guest_added": {
            "in_app": true,
            "email": true
        }
    }
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
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>timezone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="timezone"                data-endpoint="PATCHapi-users-edit-profile"
               value="America/Caracas"
               data-component="body">
    <br>
<p>Must be a valid time zone, such as <code>Africa/Accra</code>. Example: <code>America/Caracas</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>notification_preference</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>booking_created</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>in_app</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_created.in_app"
                   value="true"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_created.in_app"
                   value="false"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_created.email"
                   value="true"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_created.email"
                   value="false"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>booking_cancelled</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>in_app</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_cancelled.in_app"
                   value="true"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_cancelled.in_app"
                   value="false"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_cancelled.email"
                   value="true"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_cancelled.email"
                   value="false"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>booking_rescheduled</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>in_app</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_rescheduled.in_app"
                   value="true"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_rescheduled.in_app"
                   value="false"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_rescheduled.email"
                   value="true"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.booking_rescheduled.email"
                   value="false"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>guest_added</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>in_app</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.guest_added.in_app"
                   value="true"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.guest_added.in_app"
                   value="false"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.guest_added.email"
                   value="true"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-edit-profile" style="display: none">
            <input type="radio" name="notification_preference.guest_added.email"
                   value="false"
                   data-endpoint="PATCHapi-users-edit-profile"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
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
    \"timezone\": \"America\\/Caracas\",
    \"notification_preference\": {
        \"booking_created\": {
            \"in_app\": false,
            \"email\": true
        },
        \"booking_cancelled\": {
            \"in_app\": false,
            \"email\": false
        },
        \"booking_rescheduled\": {
            \"in_app\": false,
            \"email\": false
        },
        \"guest_added\": {
            \"in_app\": true,
            \"email\": true
        }
    },
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
    "timezone": "America\/Caracas",
    "notification_preference": {
        "booking_created": {
            "in_app": false,
            "email": true
        },
        "booking_cancelled": {
            "in_app": false,
            "email": false
        },
        "booking_rescheduled": {
            "in_app": false,
            "email": false
        },
        "guest_added": {
            "in_app": true,
            "email": true
        }
    },
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
            <b style="line-height: 2;"><code>timezone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="timezone"                data-endpoint="PATCHapi-users-change-password"
               value="America/Caracas"
               data-component="body">
    <br>
<p>Must be a valid time zone, such as <code>Africa/Accra</code>. Example: <code>America/Caracas</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>notification_preference</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>booking_created</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>in_app</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_created.in_app"
                   value="true"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_created.in_app"
                   value="false"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_created.email"
                   value="true"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_created.email"
                   value="false"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>booking_cancelled</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>in_app</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_cancelled.in_app"
                   value="true"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_cancelled.in_app"
                   value="false"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_cancelled.email"
                   value="true"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_cancelled.email"
                   value="false"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>booking_rescheduled</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>in_app</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_rescheduled.in_app"
                   value="true"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_rescheduled.in_app"
                   value="false"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_rescheduled.email"
                   value="true"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.booking_rescheduled.email"
                   value="false"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
                    </div>
                                    </details>
        </div>
                                                                    <div style=" margin-left: 14px; clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>guest_added</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>in_app</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.guest_added.in_app"
                   value="true"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.guest_added.in_app"
                   value="false"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                                                <div style="margin-left: 28px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.guest_added.email"
                   value="true"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PATCHapi-users-change-password" style="display: none">
            <input type="radio" name="notification_preference.guest_added.email"
                   value="false"
                   data-endpoint="PATCHapi-users-change-password"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
                    </div>
                                    </details>
        </div>
                                        </details>
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

                    <h2 id="endpoints-GETapi-notifications">GET api/notifications</h2>

<p>
</p>



<span id="example-requests-GETapi-notifications">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/notifications" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"is_read\": true,
    \"type\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/notifications"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "is_read": true,
    "type": "architecto"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-notifications">
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
<span id="execution-results-GETapi-notifications" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-notifications"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-notifications"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-notifications" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-notifications">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-notifications" data-method="GET"
      data-path="api/notifications"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-notifications', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-notifications"
                    onclick="tryItOut('GETapi-notifications');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-notifications"
                    onclick="cancelTryOut('GETapi-notifications');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-notifications"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/notifications</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-notifications"
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
                              name="Accept"                data-endpoint="GETapi-notifications"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_read</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="GETapi-notifications" style="display: none">
            <input type="radio" name="is_read"
                   value="true"
                   data-endpoint="GETapi-notifications"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETapi-notifications" style="display: none">
            <input type="radio" name="is_read"
                   value="false"
                   data-endpoint="GETapi-notifications"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="GETapi-notifications"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-notifications-unread-count">GET api/notifications/unread-count</h2>

<p>
</p>



<span id="example-requests-GETapi-notifications-unread-count">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/notifications/unread-count" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/notifications/unread-count"
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

<span id="example-responses-GETapi-notifications-unread-count">
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
<span id="execution-results-GETapi-notifications-unread-count" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-notifications-unread-count"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-notifications-unread-count"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-notifications-unread-count" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-notifications-unread-count">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-notifications-unread-count" data-method="GET"
      data-path="api/notifications/unread-count"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-notifications-unread-count', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-notifications-unread-count"
                    onclick="tryItOut('GETapi-notifications-unread-count');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-notifications-unread-count"
                    onclick="cancelTryOut('GETapi-notifications-unread-count');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-notifications-unread-count"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/notifications/unread-count</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-notifications-unread-count"
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
                              name="Accept"                data-endpoint="GETapi-notifications-unread-count"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-notifications-test">GET api/notifications/test</h2>

<p>
</p>



<span id="example-requests-GETapi-notifications-test">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/notifications/test" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/notifications/test"
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

<span id="example-responses-GETapi-notifications-test">
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
<span id="execution-results-GETapi-notifications-test" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-notifications-test"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-notifications-test"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-notifications-test" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-notifications-test">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-notifications-test" data-method="GET"
      data-path="api/notifications/test"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-notifications-test', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-notifications-test"
                    onclick="tryItOut('GETapi-notifications-test');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-notifications-test"
                    onclick="cancelTryOut('GETapi-notifications-test');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-notifications-test"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/notifications/test</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-notifications-test"
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
                              name="Accept"                data-endpoint="GETapi-notifications-test"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PATCHapi-notifications-read-all">PATCH api/notifications/read-all</h2>

<p>
</p>



<span id="example-requests-PATCHapi-notifications-read-all">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:3000/api/notifications/read-all" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/notifications/read-all"
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

<span id="example-responses-PATCHapi-notifications-read-all">
</span>
<span id="execution-results-PATCHapi-notifications-read-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-notifications-read-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-notifications-read-all"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-notifications-read-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-notifications-read-all">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-notifications-read-all" data-method="PATCH"
      data-path="api/notifications/read-all"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-notifications-read-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-notifications-read-all"
                    onclick="tryItOut('PATCHapi-notifications-read-all');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-notifications-read-all"
                    onclick="cancelTryOut('PATCHapi-notifications-read-all');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-notifications-read-all"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/notifications/read-all</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-notifications-read-all"
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
                              name="Accept"                data-endpoint="PATCHapi-notifications-read-all"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PATCHapi-notifications--notification_id--read">PATCH api/notifications/{notification_id}/read</h2>

<p>
</p>



<span id="example-requests-PATCHapi-notifications--notification_id--read">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost:3000/api/notifications/1/read" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/notifications/1/read"
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

<span id="example-responses-PATCHapi-notifications--notification_id--read">
</span>
<span id="execution-results-PATCHapi-notifications--notification_id--read" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-notifications--notification_id--read"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-notifications--notification_id--read"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-notifications--notification_id--read" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-notifications--notification_id--read">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-notifications--notification_id--read" data-method="PATCH"
      data-path="api/notifications/{notification_id}/read"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-notifications--notification_id--read', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-notifications--notification_id--read"
                    onclick="tryItOut('PATCHapi-notifications--notification_id--read');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-notifications--notification_id--read"
                    onclick="cancelTryOut('PATCHapi-notifications--notification_id--read');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-notifications--notification_id--read"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/notifications/{notification_id}/read</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-notifications--notification_id--read"
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
                              name="Accept"                data-endpoint="PATCHapi-notifications--notification_id--read"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>notification_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="notification_id"                data-endpoint="PATCHapi-notifications--notification_id--read"
               value="1"
               data-component="url">
    <br>
<p>The ID of the notification. Example: <code>1</code></p>
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
    \"day\": \"monday\",
    \"start_time\": \"01:57\",
    \"end_time\": \"01:57\"
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
    "day": "monday",
    "start_time": "01:57",
    "end_time": "01:57"
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
               value="monday"
               data-component="body">
    <br>
<p>Example: <code>monday</code></p>
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
               value="01:57"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>01:57</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="POSTapi-availability"
               value="01:57"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>01:57</code></p>
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
    \"day\": \"tuesday\",
    \"start_time\": \"01:57\",
    \"end_time\": \"01:57\"
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
    "day": "tuesday",
    "start_time": "01:57",
    "end_time": "01:57"
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
               value="tuesday"
               data-component="body">
    <br>
<p>Example: <code>tuesday</code></p>
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
               value="01:57"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>01:57</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_time"                data-endpoint="PUTapi-availability--id-"
               value="01:57"
               data-component="body">
    <br>
<p>Must be a valid date in the format <code>H:i</code>. Example: <code>01:57</code></p>
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

                    <h2 id="endpoints-GETapi-automations">GET api/automations</h2>

<p>
</p>



<span id="example-requests-GETapi-automations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/automations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/automations"
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

<span id="example-responses-GETapi-automations">
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
<span id="execution-results-GETapi-automations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-automations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-automations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-automations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-automations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-automations" data-method="GET"
      data-path="api/automations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-automations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-automations"
                    onclick="tryItOut('GETapi-automations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-automations"
                    onclick="cancelTryOut('GETapi-automations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-automations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/automations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-automations"
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
                              name="Accept"                data-endpoint="GETapi-automations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-automations">POST api/automations</h2>

<p>
</p>



<span id="example-requests-POSTapi-automations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/automations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"color\": \"architecto\",
    \"trigger\": \"booking.no_show\",
    \"action\": \"add_to_contact\",
    \"payload\": {
        \"subject\": \"n\",
        \"guestType\": \"confirmed\",
        \"body\": \"g\",
        \"email\": \"rowan.gulgowski@example.com\",
        \"name\": \"d\"
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/automations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "color": "architecto",
    "trigger": "booking.no_show",
    "action": "add_to_contact",
    "payload": {
        "subject": "n",
        "guestType": "confirmed",
        "body": "g",
        "email": "rowan.gulgowski@example.com",
        "name": "d"
    }
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-automations">
</span>
<span id="execution-results-POSTapi-automations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-automations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-automations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-automations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-automations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-automations" data-method="POST"
      data-path="api/automations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-automations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-automations"
                    onclick="tryItOut('POSTapi-automations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-automations"
                    onclick="cancelTryOut('POSTapi-automations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-automations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/automations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-automations"
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
                              name="Accept"                data-endpoint="POSTapi-automations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-automations"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="POSTapi-automations"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trigger</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trigger"                data-endpoint="POSTapi-automations"
               value="booking.no_show"
               data-component="body">
    <br>
<p>Example: <code>booking.no_show</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>booking.created</code></li> <li><code>booking.ended</code></li> <li><code>booking.no_show</code></li> <li><code>booking.cancelled</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>action</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="action"                data-endpoint="POSTapi-automations"
               value="add_to_contact"
               data-component="body">
    <br>
<p>Example: <code>add_to_contact</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>auto_accept_booking</code></li> <li><code>send_email</code></li> <li><code>add_to_contact</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>payload</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>subject</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payload.subject"                data-endpoint="POSTapi-automations"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>guestType</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payload.guestType"                data-endpoint="POSTapi-automations"
               value="confirmed"
               data-component="body">
    <br>
<p>Example: <code>confirmed</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>confirmed</code></li> <li><code>cancelled</code></li></ul>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payload.body"                data-endpoint="POSTapi-automations"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 5000 characters. Example: <code>g</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payload.email"                data-endpoint="POSTapi-automations"
               value="rowan.gulgowski@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>rowan.gulgowski@example.com</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payload.name"                data-endpoint="POSTapi-automations"
               value="d"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>d</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-automations--id-">GET api/automations/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-automations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/automations/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/automations/architecto"
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

<span id="example-responses-GETapi-automations--id-">
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
    &quot;message&quot;: &quot;The route api/automations/architecto could not be found.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-automations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-automations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-automations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-automations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-automations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-automations--id-" data-method="GET"
      data-path="api/automations/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-automations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-automations--id-"
                    onclick="tryItOut('GETapi-automations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-automations--id-"
                    onclick="cancelTryOut('GETapi-automations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-automations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/automations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-automations--id-"
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
                              name="Accept"                data-endpoint="GETapi-automations--id-"
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
                              name="id"                data-endpoint="GETapi-automations--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the automation. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-automations--id-">PUT api/automations/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-automations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:3000/api/automations/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"color\": \"architecto\",
    \"is_active\": false,
    \"trigger\": \"booking.created\",
    \"action\": \"auto_accept_booking\",
    \"payload\": {
        \"subject\": \"n\",
        \"guestType\": \"pending\",
        \"body\": \"g\",
        \"email\": \"rowan.gulgowski@example.com\",
        \"name\": \"d\"
    }
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/automations/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "color": "architecto",
    "is_active": false,
    "trigger": "booking.created",
    "action": "auto_accept_booking",
    "payload": {
        "subject": "n",
        "guestType": "pending",
        "body": "g",
        "email": "rowan.gulgowski@example.com",
        "name": "d"
    }
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-automations--id-">
</span>
<span id="execution-results-PUTapi-automations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-automations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-automations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-automations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-automations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-automations--id-" data-method="PUT"
      data-path="api/automations/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-automations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-automations--id-"
                    onclick="tryItOut('PUTapi-automations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-automations--id-"
                    onclick="cancelTryOut('PUTapi-automations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-automations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/automations/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/automations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-automations--id-"
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
                              name="Accept"                data-endpoint="PUTapi-automations--id-"
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
                              name="id"                data-endpoint="PUTapi-automations--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the automation. Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-automations--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="PUTapi-automations--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-automations--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-automations--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-automations--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-automations--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>trigger</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="trigger"                data-endpoint="PUTapi-automations--id-"
               value="booking.created"
               data-component="body">
    <br>
<p>Example: <code>booking.created</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>booking.created</code></li> <li><code>booking.ended</code></li> <li><code>booking.no_show</code></li> <li><code>booking.cancelled</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>action</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="action"                data-endpoint="PUTapi-automations--id-"
               value="auto_accept_booking"
               data-component="body">
    <br>
<p>Example: <code>auto_accept_booking</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>auto_accept_booking</code></li> <li><code>send_email</code></li> <li><code>add_to_contact</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>payload</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
<br>

            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>subject</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payload.subject"                data-endpoint="PUTapi-automations--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>guestType</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payload.guestType"                data-endpoint="PUTapi-automations--id-"
               value="pending"
               data-component="body">
    <br>
<p>Example: <code>pending</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>confirmed</code></li> <li><code>cancelled</code></li></ul>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>body</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payload.body"                data-endpoint="PUTapi-automations--id-"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 5000 characters. Example: <code>g</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payload.email"                data-endpoint="PUTapi-automations--id-"
               value="rowan.gulgowski@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>rowan.gulgowski@example.com</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="payload.name"                data-endpoint="PUTapi-automations--id-"
               value="d"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>d</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-automations--id-">DELETE api/automations/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-automations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:3000/api/automations/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/automations/architecto"
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

<span id="example-responses-DELETEapi-automations--id-">
</span>
<span id="execution-results-DELETEapi-automations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-automations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-automations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-automations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-automations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-automations--id-" data-method="DELETE"
      data-path="api/automations/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-automations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-automations--id-"
                    onclick="tryItOut('DELETEapi-automations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-automations--id-"
                    onclick="cancelTryOut('DELETEapi-automations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-automations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/automations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-automations--id-"
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
                              name="Accept"                data-endpoint="DELETEapi-automations--id-"
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
                              name="id"                data-endpoint="DELETEapi-automations--id-"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the automation. Example: <code>architecto</code></p>
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
    \"is_active\": true,
    \"visibility\": \"public\",
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
    "is_active": true,
    "visibility": "public",
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
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>visibility</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="visibility"                data-endpoint="PUTapi-links--id-"
               value="public"
               data-component="body">
    <br>
<p>Example: <code>public</code></p>
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

                    <h2 id="endpoints-POSTapi-contacts-import">POST api/contacts/import</h2>

<p>
</p>



<span id="example-requests-POSTapi-contacts-import">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/contacts/import" \
    --header "Content-Type: multipart/form-data" \
    --header "Accept: application/json" \
    --form "file=@/private/var/folders/1c/v4w221s53gn444vxmjvtzmt80000gn/T/phpka1313nhr791adkFVR9" </code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts/import"
);

const headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('file', document.querySelector('input[name="file"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-contacts-import">
</span>
<span id="execution-results-POSTapi-contacts-import" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-contacts-import"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-contacts-import"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-contacts-import" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-contacts-import">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-contacts-import" data-method="POST"
      data-path="api/contacts/import"
      data-authed="0"
      data-hasfiles="1"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-contacts-import', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-contacts-import"
                    onclick="tryItOut('POSTapi-contacts-import');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-contacts-import"
                    onclick="cancelTryOut('POSTapi-contacts-import');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-contacts-import"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/contacts/import</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-contacts-import"
               value="multipart/form-data"
               data-component="header">
    <br>
<p>Example: <code>multipart/form-data</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-contacts-import"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>file</code></b>&nbsp;&nbsp;
<small>file</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="file" style="display: none"
                              name="file"                data-endpoint="POSTapi-contacts-import"
               value=""
               data-component="body">
    <br>
<p>Must be a file. Must not be greater than 10240 kilobytes. Example: <code>/private/var/folders/1c/v4w221s53gn444vxmjvtzmt80000gn/T/phpka1313nhr791adkFVR9</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-contacts-import-status">GET api/contacts/import/status</h2>

<p>
</p>



<span id="example-requests-GETapi-contacts-import-status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/contacts/import/status" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts/import/status"
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

<span id="example-responses-GETapi-contacts-import-status">
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
<span id="execution-results-GETapi-contacts-import-status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-contacts-import-status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contacts-import-status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-contacts-import-status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contacts-import-status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-contacts-import-status" data-method="GET"
      data-path="api/contacts/import/status"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-contacts-import-status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-contacts-import-status"
                    onclick="tryItOut('GETapi-contacts-import-status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-contacts-import-status"
                    onclick="cancelTryOut('GETapi-contacts-import-status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-contacts-import-status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/contacts/import/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-contacts-import-status"
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
                              name="Accept"                data-endpoint="GETapi-contacts-import-status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-contacts-import-template">GET api/contacts/import/template</h2>

<p>
</p>



<span id="example-requests-GETapi-contacts-import-template">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/contacts/import/template" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts/import/template"
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

<span id="example-responses-GETapi-contacts-import-template">
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
<span id="execution-results-GETapi-contacts-import-template" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-contacts-import-template"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contacts-import-template"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-contacts-import-template" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contacts-import-template">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-contacts-import-template" data-method="GET"
      data-path="api/contacts/import/template"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-contacts-import-template', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-contacts-import-template"
                    onclick="tryItOut('GETapi-contacts-import-template');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-contacts-import-template"
                    onclick="cancelTryOut('GETapi-contacts-import-template');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-contacts-import-template"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/contacts/import/template</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-contacts-import-template"
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
                              name="Accept"                data-endpoint="GETapi-contacts-import-template"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-DELETEapi-contacts-import--import_id-">DELETE api/contacts/import/{import_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-contacts-import--import_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:3000/api/contacts/import/4" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts/import/4"
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

<span id="example-responses-DELETEapi-contacts-import--import_id-">
</span>
<span id="execution-results-DELETEapi-contacts-import--import_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-contacts-import--import_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-contacts-import--import_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-contacts-import--import_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-contacts-import--import_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-contacts-import--import_id-" data-method="DELETE"
      data-path="api/contacts/import/{import_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-contacts-import--import_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-contacts-import--import_id-"
                    onclick="tryItOut('DELETEapi-contacts-import--import_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-contacts-import--import_id-"
                    onclick="cancelTryOut('DELETEapi-contacts-import--import_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-contacts-import--import_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/contacts/import/{import_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-contacts-import--import_id-"
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
                              name="Accept"                data-endpoint="DELETEapi-contacts-import--import_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>import_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="import_id"                data-endpoint="DELETEapi-contacts-import--import_id-"
               value="4"
               data-component="url">
    <br>
<p>The ID of the import. Example: <code>4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-contacts">DELETE api/contacts</h2>

<p>
</p>



<span id="example-requests-DELETEapi-contacts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:3000/api/contacts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"ids\": [
        16
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "ids": [
        16
    ]
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-contacts">
</span>
<span id="execution-results-DELETEapi-contacts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-contacts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-contacts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-contacts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-contacts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-contacts" data-method="DELETE"
      data-path="api/contacts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-contacts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-contacts"
                    onclick="tryItOut('DELETEapi-contacts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-contacts"
                    onclick="cancelTryOut('DELETEapi-contacts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-contacts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/contacts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-contacts"
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
                              name="Accept"                data-endpoint="DELETEapi-contacts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ids</code></b>&nbsp;&nbsp;
<small>integer[]</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="ids[0]"                data-endpoint="DELETEapi-contacts"
               data-component="body">
        <input type="number" style="display: none"
               name="ids[1]"                data-endpoint="DELETEapi-contacts"
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-GETapi-contacts--contact_id--bookings">GET api/contacts/{contact_id}/bookings</h2>

<p>
</p>



<span id="example-requests-GETapi-contacts--contact_id--bookings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/contacts/1/bookings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts/1/bookings"
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

<span id="example-responses-GETapi-contacts--contact_id--bookings">
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
<span id="execution-results-GETapi-contacts--contact_id--bookings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-contacts--contact_id--bookings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contacts--contact_id--bookings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-contacts--contact_id--bookings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contacts--contact_id--bookings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-contacts--contact_id--bookings" data-method="GET"
      data-path="api/contacts/{contact_id}/bookings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-contacts--contact_id--bookings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-contacts--contact_id--bookings"
                    onclick="tryItOut('GETapi-contacts--contact_id--bookings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-contacts--contact_id--bookings"
                    onclick="cancelTryOut('GETapi-contacts--contact_id--bookings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-contacts--contact_id--bookings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/contacts/{contact_id}/bookings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-contacts--contact_id--bookings"
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
                              name="Accept"                data-endpoint="GETapi-contacts--contact_id--bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>contact_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="contact_id"                data-endpoint="GETapi-contacts--contact_id--bookings"
               value="1"
               data-component="url">
    <br>
<p>The ID of the contact. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-contacts--contact_id--bookings">POST api/contacts/{contact_id}/bookings</h2>

<p>
</p>



<span id="example-requests-POSTapi-contacts--contact_id--bookings">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/contacts/1/bookings" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"starts_at\": \"2022-11-01\",
    \"ends_at\": \"2052-10-31\",
    \"timezone\": \"Asia\\/Ulaanbaatar\",
    \"notes\": \"architecto\",
    \"event_id\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts/1/bookings"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "starts_at": "2022-11-01",
    "ends_at": "2052-10-31",
    "timezone": "Asia\/Ulaanbaatar",
    "notes": "architecto",
    "event_id": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-contacts--contact_id--bookings">
</span>
<span id="execution-results-POSTapi-contacts--contact_id--bookings" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-contacts--contact_id--bookings"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-contacts--contact_id--bookings"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-contacts--contact_id--bookings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-contacts--contact_id--bookings">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-contacts--contact_id--bookings" data-method="POST"
      data-path="api/contacts/{contact_id}/bookings"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-contacts--contact_id--bookings', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-contacts--contact_id--bookings"
                    onclick="tryItOut('POSTapi-contacts--contact_id--bookings');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-contacts--contact_id--bookings"
                    onclick="cancelTryOut('POSTapi-contacts--contact_id--bookings');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-contacts--contact_id--bookings"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/contacts/{contact_id}/bookings</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-contacts--contact_id--bookings"
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
                              name="Accept"                data-endpoint="POSTapi-contacts--contact_id--bookings"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>contact_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="contact_id"                data-endpoint="POSTapi-contacts--contact_id--bookings"
               value="1"
               data-component="url">
    <br>
<p>The ID of the contact. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>starts_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="starts_at"                data-endpoint="POSTapi-contacts--contact_id--bookings"
               value="2022-11-01"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date before <code>ends_at</code>. Example: <code>2022-11-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ends_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ends_at"                data-endpoint="POSTapi-contacts--contact_id--bookings"
               value="2052-10-31"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>starts_at</code>. Example: <code>2052-10-31</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>timezone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="timezone"                data-endpoint="POSTapi-contacts--contact_id--bookings"
               value="Asia/Ulaanbaatar"
               data-component="body">
    <br>
<p>Must be a valid time zone, such as <code>Africa/Accra</code>. Example: <code>Asia/Ulaanbaatar</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-contacts--contact_id--bookings"
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
                              name="event_id"                data-endpoint="POSTapi-contacts--contact_id--bookings"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-contacts">GET api/contacts</h2>

<p>
</p>



<span id="example-requests-GETapi-contacts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/contacts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"search\": \"b\",
    \"sort_by\": \"updated_at\",
    \"direction\": \"desc\",
    \"page\": 22,
    \"per_page\": 1
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "search": "b",
    "sort_by": "updated_at",
    "direction": "desc",
    "page": 22,
    "per_page": 1
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-contacts">
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
<span id="execution-results-GETapi-contacts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-contacts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contacts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-contacts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contacts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-contacts" data-method="GET"
      data-path="api/contacts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-contacts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-contacts"
                    onclick="tryItOut('GETapi-contacts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-contacts"
                    onclick="cancelTryOut('GETapi-contacts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-contacts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/contacts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-contacts"
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
                              name="Accept"                data-endpoint="GETapi-contacts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>search</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="search"                data-endpoint="GETapi-contacts"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sort_by</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="sort_by"                data-endpoint="GETapi-contacts"
               value="updated_at"
               data-component="body">
    <br>
<p>Example: <code>updated_at</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>id</code></li> <li><code>name</code></li> <li><code>email</code></li> <li><code>phone</code></li> <li><code>timezone</code></li> <li><code>tag</code></li> <li><code>company</code></li> <li><code>bookings_count</code></li> <li><code>last_booked_at</code></li> <li><code>created_at</code></li> <li><code>updated_at</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>direction</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="direction"                data-endpoint="GETapi-contacts"
               value="desc"
               data-component="body">
    <br>
<p>Example: <code>desc</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>asc</code></li> <li><code>desc</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="page"                data-endpoint="GETapi-contacts"
               value="22"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>22</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>per_page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="per_page"                data-endpoint="GETapi-contacts"
               value="1"
               data-component="body">
    <br>
<p>Must be between 1 and 100. Example: <code>1</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-contacts">POST api/contacts</h2>

<p>
</p>



<span id="example-requests-POSTapi-contacts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:3000/api/contacts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"name\": \"m\",
    \"phone\": \"i\",
    \"timezone\": \"Europe\\/Dublin\",
    \"company\": \"v\",
    \"tag\": \"d\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "name": "m",
    "phone": "i",
    "timezone": "Europe\/Dublin",
    "company": "v",
    "tag": "d",
    "notes": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-contacts">
</span>
<span id="execution-results-POSTapi-contacts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-contacts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-contacts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-contacts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-contacts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-contacts" data-method="POST"
      data-path="api/contacts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-contacts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-contacts"
                    onclick="tryItOut('POSTapi-contacts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-contacts"
                    onclick="cancelTryOut('POSTapi-contacts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-contacts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/contacts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-contacts"
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
                              name="Accept"                data-endpoint="POSTapi-contacts"
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
                              name="email"                data-endpoint="POSTapi-contacts"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-contacts"
               value="m"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>m</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-contacts"
               value="i"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>i</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>timezone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="timezone"                data-endpoint="POSTapi-contacts"
               value="Europe/Dublin"
               data-component="body">
    <br>
<p>Must be a valid time zone, such as <code>Africa/Accra</code>. Example: <code>Europe/Dublin</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="company"                data-endpoint="POSTapi-contacts"
               value="v"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>v</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tag</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tag"                data-endpoint="POSTapi-contacts"
               value="d"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>d</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="POSTapi-contacts"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-contacts--id-">GET api/contacts/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-contacts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/contacts/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts/1"
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

<span id="example-responses-GETapi-contacts--id-">
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
<span id="execution-results-GETapi-contacts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-contacts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-contacts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-contacts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-contacts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-contacts--id-" data-method="GET"
      data-path="api/contacts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-contacts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-contacts--id-"
                    onclick="tryItOut('GETapi-contacts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-contacts--id-"
                    onclick="cancelTryOut('GETapi-contacts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-contacts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/contacts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-contacts--id-"
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
                              name="Accept"                data-endpoint="GETapi-contacts--id-"
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
               step="any"               name="id"                data-endpoint="GETapi-contacts--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the contact. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-contacts--id-">PUT api/contacts/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-contacts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:3000/api/contacts/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"name\": \"m\",
    \"phone\": \"i\",
    \"timezone\": \"Europe\\/Dublin\",
    \"company\": \"v\",
    \"tag\": \"d\",
    \"notes\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "name": "m",
    "phone": "i",
    "timezone": "Europe\/Dublin",
    "company": "v",
    "tag": "d",
    "notes": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-contacts--id-">
</span>
<span id="execution-results-PUTapi-contacts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-contacts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-contacts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-contacts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-contacts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-contacts--id-" data-method="PUT"
      data-path="api/contacts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-contacts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-contacts--id-"
                    onclick="tryItOut('PUTapi-contacts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-contacts--id-"
                    onclick="cancelTryOut('PUTapi-contacts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-contacts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/contacts/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/contacts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-contacts--id-"
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
                              name="Accept"                data-endpoint="PUTapi-contacts--id-"
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
               step="any"               name="id"                data-endpoint="PUTapi-contacts--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the contact. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-contacts--id-"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-contacts--id-"
               value="m"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>m</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="PUTapi-contacts--id-"
               value="i"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>i</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>timezone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="timezone"                data-endpoint="PUTapi-contacts--id-"
               value="Europe/Dublin"
               data-component="body">
    <br>
<p>Must be a valid time zone, such as <code>Africa/Accra</code>. Example: <code>Europe/Dublin</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>company</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="company"                data-endpoint="PUTapi-contacts--id-"
               value="v"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>v</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tag</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tag"                data-endpoint="PUTapi-contacts--id-"
               value="d"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>d</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>notes</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="notes"                data-endpoint="PUTapi-contacts--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-contacts--id-">DELETE api/contacts/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-contacts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:3000/api/contacts/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/contacts/1"
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

<span id="example-responses-DELETEapi-contacts--id-">
</span>
<span id="execution-results-DELETEapi-contacts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-contacts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-contacts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-contacts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-contacts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-contacts--id-" data-method="DELETE"
      data-path="api/contacts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-contacts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-contacts--id-"
                    onclick="tryItOut('DELETEapi-contacts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-contacts--id-"
                    onclick="cancelTryOut('DELETEapi-contacts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-contacts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/contacts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-contacts--id-"
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
                              name="Accept"                data-endpoint="DELETEapi-contacts--id-"
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
               step="any"               name="id"                data-endpoint="DELETEapi-contacts--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the contact. Example: <code>1</code></p>
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
    \"starts_at\": \"2022-11-01\",
    \"ends_at\": \"2052-10-31\",
    \"timezone\": \"Asia\\/Ulaanbaatar\",
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
    "starts_at": "2022-11-01",
    "ends_at": "2052-10-31",
    "timezone": "Asia\/Ulaanbaatar",
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
               value="2022-11-01"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date before <code>ends_at</code>. Example: <code>2022-11-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ends_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ends_at"                data-endpoint="POSTapi-bookings"
               value="2052-10-31"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>starts_at</code>. Example: <code>2052-10-31</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>timezone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="timezone"                data-endpoint="POSTapi-bookings"
               value="Asia/Ulaanbaatar"
               data-component="body">
    <br>
<p>Must be a valid time zone, such as <code>Africa/Accra</code>. Example: <code>Asia/Ulaanbaatar</code></p>
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
    \"status\": \"cancelled\",
    \"starts_at\": \"2022-11-01\",
    \"ends_at\": \"2052-10-31\",
    \"timezone\": \"Asia\\/Ulaanbaatar\",
    \"cancellation_reason\": \"architecto\",
    \"notes\": \"architecto\",
    \"event_id\": \"architecto\",
    \"contact_id\": 16
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
    "status": "cancelled",
    "starts_at": "2022-11-01",
    "ends_at": "2052-10-31",
    "timezone": "Asia\/Ulaanbaatar",
    "cancellation_reason": "architecto",
    "notes": "architecto",
    "event_id": "architecto",
    "contact_id": 16
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
               value="cancelled"
               data-component="body">
    <br>
<p>Example: <code>cancelled</code></p>
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
               value="2022-11-01"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date before <code>ends_at</code>. Example: <code>2022-11-01</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ends_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ends_at"                data-endpoint="PUTapi-bookings--id-"
               value="2052-10-31"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>starts_at</code>. Example: <code>2052-10-31</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>timezone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="timezone"                data-endpoint="PUTapi-bookings--id-"
               value="Asia/Ulaanbaatar"
               data-component="body">
    <br>
<p>Must be a valid time zone, such as <code>Africa/Accra</code>. Example: <code>Asia/Ulaanbaatar</code></p>
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
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>contact_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="contact_id"                data-endpoint="PUTapi-bookings--id-"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
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

                    <h2 id="endpoints-GETapi-broadcasting-auth">Authenticate the request for channel access.</h2>

<p>
</p>



<span id="example-requests-GETapi-broadcasting-auth">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:3000/api/broadcasting/auth" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:3000/api/broadcasting/auth"
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

<span id="example-responses-GETapi-broadcasting-auth">
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
<span id="execution-results-GETapi-broadcasting-auth" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-broadcasting-auth"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-broadcasting-auth"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-broadcasting-auth" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-broadcasting-auth">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-broadcasting-auth" data-method="GET"
      data-path="api/broadcasting/auth"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-broadcasting-auth', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-broadcasting-auth"
                    onclick="tryItOut('GETapi-broadcasting-auth');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-broadcasting-auth"
                    onclick="cancelTryOut('GETapi-broadcasting-auth');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-broadcasting-auth"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/broadcasting/auth</code></b>
        </p>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/broadcasting/auth</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-broadcasting-auth"
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
                              name="Accept"                data-endpoint="GETapi-broadcasting-auth"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
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
