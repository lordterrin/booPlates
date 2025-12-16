<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>booPlates API Documentation</title>

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
        var tryItOutBaseUrl = "http://127.0.0.1:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.6.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.6.0.js") }}"></script>

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
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-me">
                                <a href="#endpoints-GETapi-v1-me">GET api/v1/me</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-states">
                                <a href="#endpoints-GETapi-v1-states">GET api/v1/states</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-leaderboard">
                                <a href="#endpoints-GETapi-v1-leaderboard">GET api/v1/leaderboard</a>
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
        <li>Last updated: December 16, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://127.0.0.1:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-v1-me">GET api/v1/me</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/v1/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/me"
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

<span id="example-responses-GETapi-v1-me">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;error&quot;: {
        &quot;code&quot;: &quot;USER_NOT_FOUND&quot;,
        &quot;message&quot;: &quot;This user does not exist&quot;,
        &quot;details&quot;: {
            &quot;userId&quot;: null
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-me" data-method="GET"
      data-path="api/v1/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-me"
                    onclick="tryItOut('GETapi-v1-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-me"
                    onclick="cancelTryOut('GETapi-v1-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-me"
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
                              name="Accept"                data-endpoint="GETapi-v1-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-states">GET api/v1/states</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-states">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/v1/states" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/states"
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

<span id="example-responses-GETapi-v1-states">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;code&quot;: &quot;AL&quot;,
            &quot;name&quot;: &quot;Alabama&quot;,
            &quot;moniker&quot;: &quot;The Heart of Dixie&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;AK&quot;,
            &quot;name&quot;: &quot;Alaska&quot;,
            &quot;moniker&quot;: &quot;The Last Frontier&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;AZ&quot;,
            &quot;name&quot;: &quot;Arizona&quot;,
            &quot;moniker&quot;: &quot;The Grand Canyon State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;AR&quot;,
            &quot;name&quot;: &quot;Arkansas&quot;,
            &quot;moniker&quot;: &quot;The Natural State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;CA&quot;,
            &quot;name&quot;: &quot;California&quot;,
            &quot;moniker&quot;: &quot;The Golden State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;CO&quot;,
            &quot;name&quot;: &quot;Colorado&quot;,
            &quot;moniker&quot;: &quot;The Centennial State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;CT&quot;,
            &quot;name&quot;: &quot;Connecticut&quot;,
            &quot;moniker&quot;: &quot;The Constitution State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;DE&quot;,
            &quot;name&quot;: &quot;Delaware&quot;,
            &quot;moniker&quot;: &quot;The First State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;FL&quot;,
            &quot;name&quot;: &quot;Florida&quot;,
            &quot;moniker&quot;: &quot;The Sunshine State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 1
        },
        {
            &quot;code&quot;: &quot;GA&quot;,
            &quot;name&quot;: &quot;Georgia&quot;,
            &quot;moniker&quot;: &quot;The Peach State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;HI&quot;,
            &quot;name&quot;: &quot;Hawaii&quot;,
            &quot;moniker&quot;: &quot;The Aloha State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;ID&quot;,
            &quot;name&quot;: &quot;Idaho&quot;,
            &quot;moniker&quot;: &quot;The Gem State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;IL&quot;,
            &quot;name&quot;: &quot;Illinois&quot;,
            &quot;moniker&quot;: &quot;The Prairie State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;IN&quot;,
            &quot;name&quot;: &quot;Indiana&quot;,
            &quot;moniker&quot;: &quot;The Hoosier State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;IA&quot;,
            &quot;name&quot;: &quot;Iowa&quot;,
            &quot;moniker&quot;: &quot;The Hawkeye State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;KS&quot;,
            &quot;name&quot;: &quot;Kansas&quot;,
            &quot;moniker&quot;: &quot;The Sunflower State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 1
        },
        {
            &quot;code&quot;: &quot;KY&quot;,
            &quot;name&quot;: &quot;Kentucky&quot;,
            &quot;moniker&quot;: &quot;The Bluegrass State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;LA&quot;,
            &quot;name&quot;: &quot;Louisiana&quot;,
            &quot;moniker&quot;: &quot;The Pelican State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;ME&quot;,
            &quot;name&quot;: &quot;Maine&quot;,
            &quot;moniker&quot;: &quot;The Pine Tree State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;MD&quot;,
            &quot;name&quot;: &quot;Maryland&quot;,
            &quot;moniker&quot;: &quot;The Old Line State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 1
        },
        {
            &quot;code&quot;: &quot;MA&quot;,
            &quot;name&quot;: &quot;Massachusetts&quot;,
            &quot;moniker&quot;: &quot;The Bay State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;MI&quot;,
            &quot;name&quot;: &quot;Michigan&quot;,
            &quot;moniker&quot;: &quot;The Great Lakes State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;MN&quot;,
            &quot;name&quot;: &quot;Minnesota&quot;,
            &quot;moniker&quot;: &quot;The North Star State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;MS&quot;,
            &quot;name&quot;: &quot;Mississippi&quot;,
            &quot;moniker&quot;: &quot;The Magnolia State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;MO&quot;,
            &quot;name&quot;: &quot;Missouri&quot;,
            &quot;moniker&quot;: &quot;The Show Me State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;MT&quot;,
            &quot;name&quot;: &quot;Montana&quot;,
            &quot;moniker&quot;: &quot;Big Sky Country&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;NE&quot;,
            &quot;name&quot;: &quot;Nebraska&quot;,
            &quot;moniker&quot;: &quot;The Cornhusker State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;NV&quot;,
            &quot;name&quot;: &quot;Nevada&quot;,
            &quot;moniker&quot;: &quot;The Silver State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 1
        },
        {
            &quot;code&quot;: &quot;NH&quot;,
            &quot;name&quot;: &quot;New Hampshire&quot;,
            &quot;moniker&quot;: &quot;The Granite State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;NJ&quot;,
            &quot;name&quot;: &quot;New Jersey&quot;,
            &quot;moniker&quot;: &quot;The Garden State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;NM&quot;,
            &quot;name&quot;: &quot;New Mexico&quot;,
            &quot;moniker&quot;: &quot;The Land of Enchantment&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;NY&quot;,
            &quot;name&quot;: &quot;New York&quot;,
            &quot;moniker&quot;: &quot;The Empire State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;NC&quot;,
            &quot;name&quot;: &quot;North Carolina&quot;,
            &quot;moniker&quot;: &quot;The Tar Heel State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;ND&quot;,
            &quot;name&quot;: &quot;North Dakota&quot;,
            &quot;moniker&quot;: &quot;The Peace Garden State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;OH&quot;,
            &quot;name&quot;: &quot;Ohio&quot;,
            &quot;moniker&quot;: &quot;The Buckeye State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;OK&quot;,
            &quot;name&quot;: &quot;Oklahoma&quot;,
            &quot;moniker&quot;: &quot;The Sooner State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;OR&quot;,
            &quot;name&quot;: &quot;Oregon&quot;,
            &quot;moniker&quot;: &quot;The Beaver State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;PA&quot;,
            &quot;name&quot;: &quot;Pennsylvania&quot;,
            &quot;moniker&quot;: &quot;The Keystone State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;RI&quot;,
            &quot;name&quot;: &quot;Rhode Island&quot;,
            &quot;moniker&quot;: &quot;The Ocean State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;SC&quot;,
            &quot;name&quot;: &quot;South Carolina&quot;,
            &quot;moniker&quot;: &quot;The Palmetto State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;SD&quot;,
            &quot;name&quot;: &quot;South Dakota&quot;,
            &quot;moniker&quot;: &quot;Mount Rushmore State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 1
        },
        {
            &quot;code&quot;: &quot;TN&quot;,
            &quot;name&quot;: &quot;Tennessee&quot;,
            &quot;moniker&quot;: &quot;The Volunteer State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;TX&quot;,
            &quot;name&quot;: &quot;Texas&quot;,
            &quot;moniker&quot;: &quot;The Lone Star State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 2
        },
        {
            &quot;code&quot;: &quot;UT&quot;,
            &quot;name&quot;: &quot;Utah&quot;,
            &quot;moniker&quot;: &quot;The Beehive State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;VT&quot;,
            &quot;name&quot;: &quot;Vermont&quot;,
            &quot;moniker&quot;: &quot;The Green Mountain State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;VA&quot;,
            &quot;name&quot;: &quot;Virginia&quot;,
            &quot;moniker&quot;: &quot;The Old Dominion&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;WA&quot;,
            &quot;name&quot;: &quot;Washington&quot;,
            &quot;moniker&quot;: &quot;The Evergreen State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 1
        },
        {
            &quot;code&quot;: &quot;WV&quot;,
            &quot;name&quot;: &quot;West Virginia&quot;,
            &quot;moniker&quot;: &quot;The Mountain State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;WI&quot;,
            &quot;name&quot;: &quot;Wisconsin&quot;,
            &quot;moniker&quot;: &quot;The Badger State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 0
        },
        {
            &quot;code&quot;: &quot;WY&quot;,
            &quot;name&quot;: &quot;Wyoming&quot;,
            &quot;moniker&quot;: &quot;The Equality State&quot;,
            &quot;user_status&quot;: 0,
            &quot;user_photo&quot;: [],
            &quot;total_state_users&quot;: 1
        }
    ],
    &quot;meta&quot;: {
        &quot;total_states&quot;: 50,
        &quot;user&quot;: 0
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-states" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-states"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-states"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-states" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-states">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-states" data-method="GET"
      data-path="api/v1/states"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-states', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-states"
                    onclick="tryItOut('GETapi-v1-states');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-states"
                    onclick="cancelTryOut('GETapi-v1-states');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-states"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/states</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-states"
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
                              name="Accept"                data-endpoint="GETapi-v1-states"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-leaderboard">GET api/v1/leaderboard</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-leaderboard">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/v1/leaderboard" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/v1/leaderboard"
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

<span id="example-responses-GETapi-v1-leaderboard">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Brian Powell&quot;,
            &quot;states_count&quot;: 8,
            &quot;states_max_updated_at&quot;: &quot;2025-12-16 00:22:26&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Ethan Rom&quot;,
            &quot;states_count&quot;: 1,
            &quot;states_max_updated_at&quot;: &quot;2025-12-11 19:12:56&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-leaderboard" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-leaderboard"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-leaderboard"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-leaderboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-leaderboard">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-leaderboard" data-method="GET"
      data-path="api/v1/leaderboard"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-leaderboard', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-leaderboard"
                    onclick="tryItOut('GETapi-v1-leaderboard');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-leaderboard"
                    onclick="cancelTryOut('GETapi-v1-leaderboard');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-leaderboard"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/leaderboard</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-leaderboard"
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
                              name="Accept"                data-endpoint="GETapi-v1-leaderboard"
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
