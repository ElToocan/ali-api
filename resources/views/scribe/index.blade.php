<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title> Alizon API Documentation</title>

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
        var tryItOutBaseUrl = "http://ali-api.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.3.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.3.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
            <img src="1" alt="logo" class="logo" style="padding-top: 10px;" width="100%"/>
    
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
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">Login api</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-customers">
                                <a href="#endpoints-GETapi-v1-customers">GET api/v1/customers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-customers">
                                <a href="#endpoints-POSTapi-v1-customers">POST api/v1/customers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-customers--id-">
                                <a href="#endpoints-GETapi-v1-customers--id-">GET api/v1/customers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-customers--id-">
                                <a href="#endpoints-PUTapi-v1-customers--id-">PUT api/v1/customers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-category">
                                <a href="#endpoints-GETapi-v1-category">GET api/v1/category</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-category">
                                <a href="#endpoints-POSTapi-v1-category">POST api/v1/category</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-category--id-">
                                <a href="#endpoints-PUTapi-v1-category--id-">PUT api/v1/category/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-category--id-">
                                <a href="#endpoints-DELETEapi-v1-category--id-">DELETE api/v1/category/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-orders">
                                <a href="#endpoints-GETapi-v1-orders">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-orders-create">
                                <a href="#endpoints-GETapi-v1-orders-create">Show the form for creating a new resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-orders">
                                <a href="#endpoints-POSTapi-v1-orders">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-orders--id-">
                                <a href="#endpoints-GETapi-v1-orders--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-orders--order--edit">
                                <a href="#endpoints-GETapi-v1-orders--order--edit">Show the form for editing the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-orders--id-">
                                <a href="#endpoints-PUTapi-v1-orders--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-orders--id-">
                                <a href="#endpoints-DELETEapi-v1-orders--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-debug-customers">
                                <a href="#endpoints-GETapi-v1-debug-customers">GET api/v1/debug/customers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-debug-customers">
                                <a href="#endpoints-POSTapi-v1-debug-customers">POST api/v1/debug/customers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-debug-customers--id-">
                                <a href="#endpoints-GETapi-v1-debug-customers--id-">GET api/v1/debug/customers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-debug-customers--id-">
                                <a href="#endpoints-PUTapi-v1-debug-customers--id-">PUT api/v1/debug/customers/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-debug-category">
                                <a href="#endpoints-GETapi-v1-debug-category">GET api/v1/debug/category</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-debug-category">
                                <a href="#endpoints-POSTapi-v1-debug-category">POST api/v1/debug/category</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-debug-category--id-">
                                <a href="#endpoints-PUTapi-v1-debug-category--id-">PUT api/v1/debug/category/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-debug-category--id-">
                                <a href="#endpoints-DELETEapi-v1-debug-category--id-">DELETE api/v1/debug/category/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-debug-orders">
                                <a href="#endpoints-GETapi-v1-debug-orders">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-debug-orders-create">
                                <a href="#endpoints-GETapi-v1-debug-orders-create">Show the form for creating a new resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-debug-orders">
                                <a href="#endpoints-POSTapi-v1-debug-orders">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-debug-orders--id-">
                                <a href="#endpoints-GETapi-v1-debug-orders--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-debug-orders--order--edit">
                                <a href="#endpoints-GETapi-v1-debug-orders--order--edit">Show the form for editing the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-debug-orders--id-">
                                <a href="#endpoints-PUTapi-v1-debug-orders--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-debug-orders--id-">
                                <a href="#endpoints-DELETEapi-v1-debug-orders--id-">Remove the specified resource from storage.</a>
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
        <li>Last updated: September 26, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>Alizon API REST fo applications AliSales(web), AliInventory(mobile) and AliPurchases(desktop) </p>
<aside>
    <strong>Base URL</strong>: <code>http://ali-api.test</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/user"
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

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-login">Login api</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://ali-api.test/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/login"
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
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-customers">GET api/v1/customers</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-customers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/customers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/customers"
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

<span id="example-responses-GETapi-v1-customers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Simone-Adrienne Salmon&quot;,
        &quot;address&quot;: &quot;17, place de Leroux\n92561 Rouxboeuf&quot;,
        &quot;postalCode&quot;: &quot;93328&quot;,
        &quot;city&quot;: &quot;Briandboeuf&quot;,
        &quot;email&quot;: &quot;adele21@example.org&quot;,
        &quot;url&quot;: &quot;http://bonnin.fr/&quot;,
        &quot;user_id&quot;: 14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Thierry Colin&quot;,
        &quot;address&quot;: &quot;11, rue Alex Valentin\n50981 Alves&quot;,
        &quot;postalCode&quot;: &quot;28573&quot;,
        &quot;city&quot;: &quot;Normand&quot;,
        &quot;email&quot;: &quot;nicolas58@example.net&quot;,
        &quot;url&quot;: &quot;http://gaudin.fr/libero-ratione-vel-ut-placeat-velit.html&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Bernard Guyon&quot;,
        &quot;address&quot;: &quot;27, rue de Faivre\n42111 Marion-la-For&ecirc;t&quot;,
        &quot;postalCode&quot;: &quot;12336&quot;,
        &quot;city&quot;: &quot;Brun&quot;,
        &quot;email&quot;: &quot;qpichon@example.org&quot;,
        &quot;url&quot;: &quot;https://www.clement.net/veniam-rerum-voluptatibus-rem-optio-eos-rerum&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Thomas Paris&quot;,
        &quot;address&quot;: &quot;38, rue Le Goff\n63004 Durand&quot;,
        &quot;postalCode&quot;: &quot;47567&quot;,
        &quot;city&quot;: &quot;Huet&quot;,
        &quot;email&quot;: &quot;dufour.frederic@example.net&quot;,
        &quot;url&quot;: &quot;http://www.vincent.fr/labore-omnis-officia-aut-excepturi-voluptas&quot;,
        &quot;user_id&quot;: 16,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Beno&icirc;t Cordier-Munoz&quot;,
        &quot;address&quot;: &quot;6, impasse Julien Valentin\n79128 Le Goff&quot;,
        &quot;postalCode&quot;: &quot;98369&quot;,
        &quot;city&quot;: &quot;Gautierboeuf&quot;,
        &quot;email&quot;: &quot;lreynaud@example.com&quot;,
        &quot;url&quot;: &quot;https://www.guillon.net/quasi-et-quia-itaque-aut-illo-laudantium-similique&quot;,
        &quot;user_id&quot;: 28,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Nicolas Fischer-Rodriguez&quot;,
        &quot;address&quot;: &quot;4, boulevard de Bertin\n65340 Peronboeuf&quot;,
        &quot;postalCode&quot;: &quot;92330&quot;,
        &quot;city&quot;: &quot;Blondel&quot;,
        &quot;email&quot;: &quot;denis.valette@example.org&quot;,
        &quot;url&quot;: &quot;http://www.perrier.fr/reprehenderit-quia-non-libero-officia-quia&quot;,
        &quot;user_id&quot;: 20,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Honor&eacute; Bodin&quot;,
        &quot;address&quot;: &quot;69, rue de Marin\n54132 Durand&quot;,
        &quot;postalCode&quot;: &quot;96549&quot;,
        &quot;city&quot;: &quot;Benoit&quot;,
        &quot;email&quot;: &quot;noel98@example.net&quot;,
        &quot;url&quot;: &quot;http://nguyen.fr/ipsam-dolor-id-optio-aut-dolorem.html&quot;,
        &quot;user_id&quot;: 4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Jacques Noel&quot;,
        &quot;address&quot;: &quot;27, impasse Cousin\n71299 Ferreira&quot;,
        &quot;postalCode&quot;: &quot;03101&quot;,
        &quot;city&quot;: &quot;Millet-les-Bains&quot;,
        &quot;email&quot;: &quot;moreno.pierre@example.net&quot;,
        &quot;url&quot;: &quot;http://leclercq.com/voluptates-enim-quibusdam-ullam-eum-ex&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Isabelle-Martine Martel&quot;,
        &quot;address&quot;: &quot;75, impasse Guillaume Moulin\n97111 NeveuVille&quot;,
        &quot;postalCode&quot;: &quot;87050&quot;,
        &quot;city&quot;: &quot;Lemonnier&quot;,
        &quot;email&quot;: &quot;yramos@example.com&quot;,
        &quot;url&quot;: &quot;http://gosselin.com/aut-exercitationem-est-eos-officiis-et.html&quot;,
        &quot;user_id&quot;: 24,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Manon Potier&quot;,
        &quot;address&quot;: &quot;45, place Bertin\n68233 GuillouVille&quot;,
        &quot;postalCode&quot;: &quot;48473&quot;,
        &quot;city&quot;: &quot;Diallo&quot;,
        &quot;email&quot;: &quot;alfred24@example.org&quot;,
        &quot;url&quot;: &quot;http://jourdan.fr/sunt-sit-fuga-quia-error-voluptas-consectetur-et&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Fran&ccedil;oise-Bernadette Paul&quot;,
        &quot;address&quot;: &quot;chemin Maryse Mahe\n51420 Guibert&quot;,
        &quot;postalCode&quot;: &quot;67441&quot;,
        &quot;city&quot;: &quot;Laine&quot;,
        &quot;email&quot;: &quot;capucine73@example.com&quot;,
        &quot;url&quot;: &quot;http://benard.fr/possimus-quam-vitae-placeat-autem&quot;,
        &quot;user_id&quot;: 11,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Fran&ccedil;oise Blanchard-Tessier&quot;,
        &quot;address&quot;: &quot;50, chemin Emmanuel Breton\n25795 Barbe&quot;,
        &quot;postalCode&quot;: &quot;04496&quot;,
        &quot;city&quot;: &quot;Maury&quot;,
        &quot;email&quot;: &quot;peron.victor@example.org&quot;,
        &quot;url&quot;: &quot;http://www.barbe.fr/sequi-cum-quidem-explicabo-excepturi-facere-ut-ut-aut.html&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Nathalie de Lamy&quot;,
        &quot;address&quot;: &quot;266, impasse Philippe\n25713 Le Goff&quot;,
        &quot;postalCode&quot;: &quot;81748&quot;,
        &quot;city&quot;: &quot;Bousquet&quot;,
        &quot;email&quot;: &quot;suzanne60@example.org&quot;,
        &quot;url&quot;: &quot;http://diaz.com/dolores-debitis-aut-et-officiis-fugit.html&quot;,
        &quot;user_id&quot;: 4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Bertrand Toussaint&quot;,
        &quot;address&quot;: &quot;6, impasse Leblanc\n25669 Francois&quot;,
        &quot;postalCode&quot;: &quot;50701&quot;,
        &quot;city&quot;: &quot;Richard&quot;,
        &quot;email&quot;: &quot;wdias@example.com&quot;,
        &quot;url&quot;: &quot;http://www.lenoir.fr/in-cumque-facilis-non-possimus&quot;,
        &quot;user_id&quot;: 23,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Robert Hoareau&quot;,
        &quot;address&quot;: &quot;228, rue Isabelle Maillet\n63075 Pons&quot;,
        &quot;postalCode&quot;: &quot;06873&quot;,
        &quot;city&quot;: &quot;Goncalves-sur-Leveque&quot;,
        &quot;email&quot;: &quot;raymond.jacob@example.com&quot;,
        &quot;url&quot;: &quot;http://petit.org/magnam-nisi-ut-ea-non-et&quot;,
        &quot;user_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;name&quot;: &quot;Aurore-Nathalie Boucher&quot;,
        &quot;address&quot;: &quot;73, place Ollivier\n09202 Schmittboeuf&quot;,
        &quot;postalCode&quot;: &quot;53373&quot;,
        &quot;city&quot;: &quot;Normand-les-Bains&quot;,
        &quot;email&quot;: &quot;ines02@example.net&quot;,
        &quot;url&quot;: &quot;http://www.becker.com/&quot;,
        &quot;user_id&quot;: 16,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;name&quot;: &quot;Anouk-Jacqueline Allain&quot;,
        &quot;address&quot;: &quot;1, rue St&eacute;phanie Gillet\n12809 Besson&quot;,
        &quot;postalCode&quot;: &quot;62105&quot;,
        &quot;city&quot;: &quot;Boucher-sur-Royer&quot;,
        &quot;email&quot;: &quot;blin.jerome@example.net&quot;,
        &quot;url&quot;: &quot;http://www.bazin.org/et-sit-qui-ut-possimus-et&quot;,
        &quot;user_id&quot;: 12,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;name&quot;: &quot;Antoinette Camus&quot;,
        &quot;address&quot;: &quot;23, chemin Raymond Guichard\n13860 Boulay&quot;,
        &quot;postalCode&quot;: &quot;11144&quot;,
        &quot;city&quot;: &quot;Rousset&quot;,
        &quot;email&quot;: &quot;thomas.deschamps@example.org&quot;,
        &quot;url&quot;: &quot;http://vincent.org/&quot;,
        &quot;user_id&quot;: 13,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;name&quot;: &quot;Raymond Paris&quot;,
        &quot;address&quot;: &quot;19, place Isabelle Munoz\n19401 Pierre&quot;,
        &quot;postalCode&quot;: &quot;05189&quot;,
        &quot;city&quot;: &quot;MorenoBourg&quot;,
        &quot;email&quot;: &quot;udumas@example.net&quot;,
        &quot;url&quot;: &quot;https://www.guerin.org/dicta-et-hic-rerum-laborum-quia-sapiente-quaerat&quot;,
        &quot;user_id&quot;: 7,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;name&quot;: &quot;Augustin Mary&quot;,
        &quot;address&quot;: &quot;72, avenue Georges Diallo\n99180 Colin&quot;,
        &quot;postalCode&quot;: &quot;19668&quot;,
        &quot;city&quot;: &quot;Legendre-sur-Dias&quot;,
        &quot;email&quot;: &quot;bgaudin@example.com&quot;,
        &quot;url&quot;: &quot;http://www.delannoy.com/enim-molestias-ut-laborum-minima-doloribus-exercitationem.html&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;Alfred Hamon&quot;,
        &quot;address&quot;: &quot;50, chemin Roussel\n31349 Vasseur&quot;,
        &quot;postalCode&quot;: &quot;74130&quot;,
        &quot;city&quot;: &quot;Rochedan&quot;,
        &quot;email&quot;: &quot;valette.zacharie@example.com&quot;,
        &quot;url&quot;: &quot;http://www.lemoine.fr/omnis-ut-sit-illo-pariatur&quot;,
        &quot;user_id&quot;: 13,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;name&quot;: &quot;Andr&eacute;e de Guyot&quot;,
        &quot;address&quot;: &quot;10, avenue Ferreira\n61853 Laine&quot;,
        &quot;postalCode&quot;: &quot;36048&quot;,
        &quot;city&quot;: &quot;Cousin&quot;,
        &quot;email&quot;: &quot;zfoucher@example.org&quot;,
        &quot;url&quot;: &quot;http://www.leveque.com/iure-sunt-omnis-ex-recusandae&quot;,
        &quot;user_id&quot;: 15,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;name&quot;: &quot;Suzanne-Brigitte Camus&quot;,
        &quot;address&quot;: &quot;52, boulevard Zacharie Schmitt\n71815 PaulVille&quot;,
        &quot;postalCode&quot;: &quot;25573&quot;,
        &quot;city&quot;: &quot;Ledoux&quot;,
        &quot;email&quot;: &quot;dcarre@example.net&quot;,
        &quot;url&quot;: &quot;http://barbier.fr/dignissimos-cumque-praesentium-veritatis-non-molestias-aut-voluptatem.html&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;name&quot;: &quot;Colette Dupuis&quot;,
        &quot;address&quot;: &quot;4, place &Eacute;douard Clement\n64693 PonsBourg&quot;,
        &quot;postalCode&quot;: &quot;25154&quot;,
        &quot;city&quot;: &quot;Fernandes&quot;,
        &quot;email&quot;: &quot;mmahe@example.org&quot;,
        &quot;url&quot;: &quot;http://leleu.com/quis-delectus-ipsum-sint-inventore-consequuntur-at.html&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;name&quot;: &quot;Jacques Joubert&quot;,
        &quot;address&quot;: &quot;22, chemin Le Roux\n73806 Martinez&quot;,
        &quot;postalCode&quot;: &quot;68389&quot;,
        &quot;city&quot;: &quot;Renault&quot;,
        &quot;email&quot;: &quot;collin.lucy@example.net&quot;,
        &quot;url&quot;: &quot;http://www.gillet.net/iste-quo-veniam-id&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;name&quot;: &quot;No&eacute;mi Lamy&quot;,
        &quot;address&quot;: &quot;avenue Renard\n49242 Valette&quot;,
        &quot;postalCode&quot;: &quot;52790&quot;,
        &quot;city&quot;: &quot;Becker&quot;,
        &quot;email&quot;: &quot;sebastien65@example.com&quot;,
        &quot;url&quot;: &quot;http://www.boyer.org/quam-vel-quisquam-sit&quot;,
        &quot;user_id&quot;: 25,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;name&quot;: &quot;Julie Cohen&quot;,
        &quot;address&quot;: &quot;4, boulevard Augustin Joly\n28752 Begue&quot;,
        &quot;postalCode&quot;: &quot;63939&quot;,
        &quot;city&quot;: &quot;Rousset&quot;,
        &quot;email&quot;: &quot;gros.clemence@example.org&quot;,
        &quot;url&quot;: &quot;http://www.riviere.com/voluptatem-illo-nostrum-aliquid-quibusdam&quot;,
        &quot;user_id&quot;: 28,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;name&quot;: &quot;&Eacute;l&eacute;onore du Mace&quot;,
        &quot;address&quot;: &quot;36, impasse Paul\n00856 Costadan&quot;,
        &quot;postalCode&quot;: &quot;53063&quot;,
        &quot;city&quot;: &quot;Jacquet&quot;,
        &quot;email&quot;: &quot;arthur.bonnin@example.net&quot;,
        &quot;url&quot;: &quot;http://duval.com/ut-dolorem-at-et-eum-a&quot;,
        &quot;user_id&quot;: 15,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;name&quot;: &quot;Emmanuelle Camus&quot;,
        &quot;address&quot;: &quot;2, avenue Corinne Bailly\n34929 Turpindan&quot;,
        &quot;postalCode&quot;: &quot;03185&quot;,
        &quot;city&quot;: &quot;Foucher&quot;,
        &quot;email&quot;: &quot;martine34@example.com&quot;,
        &quot;url&quot;: &quot;http://tessier.fr/&quot;,
        &quot;user_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;name&quot;: &quot;Victor-G&eacute;rard Garcia&quot;,
        &quot;address&quot;: &quot;596, impasse Zacharie Riou\n00715 Allain&quot;,
        &quot;postalCode&quot;: &quot;83738&quot;,
        &quot;city&quot;: &quot;Cousin&quot;,
        &quot;email&quot;: &quot;vincent76@example.com&quot;,
        &quot;url&quot;: &quot;http://www.bonnin.com/dolor-beatae-facere-perspiciatis-quisquam-recusandae-doloribus-est&quot;,
        &quot;user_id&quot;: 21,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;name&quot;: &quot;Henri Mary&quot;,
        &quot;address&quot;: &quot;74, chemin Allain\n95267 AllardVille&quot;,
        &quot;postalCode&quot;: &quot;21454&quot;,
        &quot;city&quot;: &quot;Dumasnec&quot;,
        &quot;email&quot;: &quot;netienne@example.org&quot;,
        &quot;url&quot;: &quot;https://alexandre.com/qui-aut-labore-itaque-possimus-quos-sit-recusandae.html&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;name&quot;: &quot;Franck Le Germain&quot;,
        &quot;address&quot;: &quot;rue Vincent\n43325 Paris-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;46958&quot;,
        &quot;city&quot;: &quot;Klein&quot;,
        &quot;email&quot;: &quot;timothee20@example.com&quot;,
        &quot;url&quot;: &quot;http://besson.fr/ab-et-molestiae-ratione-harum-sit.html&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;name&quot;: &quot;Christophe Thierry&quot;,
        &quot;address&quot;: &quot;683, avenue de Petit\n94658 Hebert-sur-Perrier&quot;,
        &quot;postalCode&quot;: &quot;34597&quot;,
        &quot;city&quot;: &quot;Aubry&quot;,
        &quot;email&quot;: &quot;maurice.mary@example.net&quot;,
        &quot;url&quot;: &quot;http://perret.com/pariatur-placeat-culpa-sit-nam-ratione-molestiae&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;name&quot;: &quot;Bernard-Emmanuel Herve&quot;,
        &quot;address&quot;: &quot;27, impasse de Ledoux\n89269 Maurice&quot;,
        &quot;postalCode&quot;: &quot;96389&quot;,
        &quot;city&quot;: &quot;Bazin&quot;,
        &quot;email&quot;: &quot;edupuy@example.org&quot;,
        &quot;url&quot;: &quot;http://barbier.net/&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;name&quot;: &quot;&Eacute;mile Guillou-Lemaire&quot;,
        &quot;address&quot;: &quot;41, place Jean\n36282 Lopes&quot;,
        &quot;postalCode&quot;: &quot;19858&quot;,
        &quot;city&quot;: &quot;Grosnec&quot;,
        &quot;email&quot;: &quot;tristan.dupuy@example.com&quot;,
        &quot;url&quot;: &quot;http://www.adam.fr/&quot;,
        &quot;user_id&quot;: 27,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;name&quot;: &quot;No&euml;l Martel&quot;,
        &quot;address&quot;: &quot;33, rue Duhamel\n91754 Charrier&quot;,
        &quot;postalCode&quot;: &quot;06263&quot;,
        &quot;city&quot;: &quot;Lejeune-sur-Brunel&quot;,
        &quot;email&quot;: &quot;iclement@example.net&quot;,
        &quot;url&quot;: &quot;http://www.barthelemy.com/fuga-neque-et-doloribus-magni-reprehenderit&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;name&quot;: &quot;Charles Morin&quot;,
        &quot;address&quot;: &quot;420, rue Augustin Julien\n93034 Martins-sur-Moreau&quot;,
        &quot;postalCode&quot;: &quot;59175&quot;,
        &quot;city&quot;: &quot;PintoVille&quot;,
        &quot;email&quot;: &quot;eleonore59@example.org&quot;,
        &quot;url&quot;: &quot;http://menard.fr/facere-sint-sunt-dolor-aut-modi.html&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;name&quot;: &quot;Fr&eacute;d&eacute;rique-Mathilde Martinez&quot;,
        &quot;address&quot;: &quot;88, impasse de Grondin\n67117 Lebon&quot;,
        &quot;postalCode&quot;: &quot;07665&quot;,
        &quot;city&quot;: &quot;Boucher&quot;,
        &quot;email&quot;: &quot;lefevre.juliette@example.net&quot;,
        &quot;url&quot;: &quot;http://www.leger.org/est-ab-quis-harum-dolorem-rerum-quisquam-rerum&quot;,
        &quot;user_id&quot;: 27,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;name&quot;: &quot;Emmanuel-&Eacute;tienne Toussaint&quot;,
        &quot;address&quot;: &quot;2, impasse Lebreton\n41278 Lefevre&quot;,
        &quot;postalCode&quot;: &quot;99478&quot;,
        &quot;city&quot;: &quot;Colin-sur-Mer&quot;,
        &quot;email&quot;: &quot;renaud.aime@example.org&quot;,
        &quot;url&quot;: &quot;http://gauthier.com/laudantium-earum-doloremque-aut-consectetur-sint&quot;,
        &quot;user_id&quot;: 7,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;name&quot;: &quot;Nathalie-Susanne Leconte&quot;,
        &quot;address&quot;: &quot;28, chemin Hoareau\n19626 Legendre&quot;,
        &quot;postalCode&quot;: &quot;18125&quot;,
        &quot;city&quot;: &quot;Bernier-sur-Ledoux&quot;,
        &quot;email&quot;: &quot;marguerite.dasilva@example.com&quot;,
        &quot;url&quot;: &quot;http://gomez.com/beatae-aut-nihil-et-et-sint-et&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;name&quot;: &quot;Christelle Lefebvre&quot;,
        &quot;address&quot;: &quot;9, rue Sanchez\n48050 Andrenec&quot;,
        &quot;postalCode&quot;: &quot;85414&quot;,
        &quot;city&quot;: &quot;Imbert&quot;,
        &quot;email&quot;: &quot;wgodard@example.com&quot;,
        &quot;url&quot;: &quot;http://bonnin.com/odit-fugit-aut-omnis-atque-amet.html&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;name&quot;: &quot;Laure Noel&quot;,
        &quot;address&quot;: &quot;88, avenue Lemaire\n78406 Michel-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;44765&quot;,
        &quot;city&quot;: &quot;Rocher-la-For&ecirc;t&quot;,
        &quot;email&quot;: &quot;turpin.remy@example.net&quot;,
        &quot;url&quot;: &quot;http://www.delorme.org/ut-temporibus-quaerat-dolor&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;name&quot;: &quot;Henri Ledoux-Grenier&quot;,
        &quot;address&quot;: &quot;91, impasse de Garcia\n88831 Blanchard&quot;,
        &quot;postalCode&quot;: &quot;70690&quot;,
        &quot;city&quot;: &quot;Dijoux&quot;,
        &quot;email&quot;: &quot;michaud.raymond@example.org&quot;,
        &quot;url&quot;: &quot;http://www.legrand.org/ut-sed-officiis-perspiciatis-dolores-totam-ut-perferendis-commodi&quot;,
        &quot;user_id&quot;: 16,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;name&quot;: &quot;Agn&egrave;s Fabre&quot;,
        &quot;address&quot;: &quot;avenue In&egrave;s Marty\n48019 Colin&quot;,
        &quot;postalCode&quot;: &quot;42551&quot;,
        &quot;city&quot;: &quot;Baron&quot;,
        &quot;email&quot;: &quot;ohumbert@example.org&quot;,
        &quot;url&quot;: &quot;http://www.alexandre.com/consectetur-quod-maxime-architecto-modi-quaerat-pariatur-consequatur&quot;,
        &quot;user_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;name&quot;: &quot;Manon de Benoit&quot;,
        &quot;address&quot;: &quot;8, boulevard Carlier\n04759 NicolasBourg&quot;,
        &quot;postalCode&quot;: &quot;08897&quot;,
        &quot;city&quot;: &quot;Vidal-les-Bains&quot;,
        &quot;email&quot;: &quot;lucas.cohen@example.net&quot;,
        &quot;url&quot;: &quot;http://www.rolland.com/at-dolorem-earum-modi-non-fugit-est&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;name&quot;: &quot;Andr&eacute;e Chauvin&quot;,
        &quot;address&quot;: &quot;955, boulevard Mich&egrave;le Foucher\n52157 GalletVille&quot;,
        &quot;postalCode&quot;: &quot;12632&quot;,
        &quot;city&quot;: &quot;Hoarau-la-For&ecirc;t&quot;,
        &quot;email&quot;: &quot;jdiaz@example.com&quot;,
        &quot;url&quot;: &quot;http://www.potier.com/est-neque-optio-blanditiis-qui&quot;,
        &quot;user_id&quot;: 12,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;name&quot;: &quot;Anastasie de la Duval&quot;,
        &quot;address&quot;: &quot;boulevard de Weiss\n24951 Gimenez-sur-Mer&quot;,
        &quot;postalCode&quot;: &quot;57467&quot;,
        &quot;city&quot;: &quot;Loiseau-la-For&ecirc;t&quot;,
        &quot;email&quot;: &quot;benjamin06@example.org&quot;,
        &quot;url&quot;: &quot;http://parent.fr/voluptatem-adipisci-iusto-aut-non-aut&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;name&quot;: &quot;S&eacute;bastien Ollivier-Ferrand&quot;,
        &quot;address&quot;: &quot;83, rue Timoth&eacute;e Millet\n72340 Lefevre&quot;,
        &quot;postalCode&quot;: &quot;68649&quot;,
        &quot;city&quot;: &quot;Chevallier&quot;,
        &quot;email&quot;: &quot;constance53@example.com&quot;,
        &quot;url&quot;: &quot;https://www.langlois.fr/eum-sit-cumque-et-id&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;name&quot;: &quot;Margaud-Astrid Boutin&quot;,
        &quot;address&quot;: &quot;56, rue de Marchal\n88787 Gilbert-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;84570&quot;,
        &quot;city&quot;: &quot;Roussel&quot;,
        &quot;email&quot;: &quot;aimee.marie@example.net&quot;,
        &quot;url&quot;: &quot;http://pires.org/aperiam-et-vero-autem-dolorem-sunt-id-vel-ut&quot;,
        &quot;user_id&quot;: 16,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;name&quot;: &quot;Isaac-Alphonse Bodin&quot;,
        &quot;address&quot;: &quot;30, boulevard de Masson\n81880 Laporte-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;15316&quot;,
        &quot;city&quot;: &quot;Valentin&quot;,
        &quot;email&quot;: &quot;lacombe.michel@example.com&quot;,
        &quot;url&quot;: &quot;http://www.briand.fr/&quot;,
        &quot;user_id&quot;: 18,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;name&quot;: &quot;Th&eacute;odore Blanchard&quot;,
        &quot;address&quot;: &quot;8, avenue Maillot\n53711 Salmon&quot;,
        &quot;postalCode&quot;: &quot;71307&quot;,
        &quot;city&quot;: &quot;Herve&quot;,
        &quot;email&quot;: &quot;menard.olivie@example.com&quot;,
        &quot;url&quot;: &quot;http://www.mathieu.fr/esse-est-ipsum-repellat-repellendus-consectetur-quia-eveniet-assumenda&quot;,
        &quot;user_id&quot;: 11,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;name&quot;: &quot;Olivie Le Roux&quot;,
        &quot;address&quot;: &quot;60, impasse de Robert\n99628 Roussel-sur-Vasseur&quot;,
        &quot;postalCode&quot;: &quot;71223&quot;,
        &quot;city&quot;: &quot;BriandVille&quot;,
        &quot;email&quot;: &quot;pascal.stephanie@example.org&quot;,
        &quot;url&quot;: &quot;https://www.gaillard.fr/sit-ipsum-aut-esse-sed-voluptates-quod-numquam-ea&quot;,
        &quot;user_id&quot;: 14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;name&quot;: &quot;Fran&ccedil;oise Le Bruneau&quot;,
        &quot;address&quot;: &quot;rue Alfred Pereira\n70169 Bazin-sur-Raymond&quot;,
        &quot;postalCode&quot;: &quot;22474&quot;,
        &quot;city&quot;: &quot;Mace&quot;,
        &quot;email&quot;: &quot;eric68@example.net&quot;,
        &quot;url&quot;: &quot;http://bigot.com/et-cupiditate-necessitatibus-eveniet&quot;,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;name&quot;: &quot;Franck Devaux&quot;,
        &quot;address&quot;: &quot;26, rue Adrien Martins\n89573 Legros-sur-Mer&quot;,
        &quot;postalCode&quot;: &quot;61973&quot;,
        &quot;city&quot;: &quot;BegueBourg&quot;,
        &quot;email&quot;: &quot;ines.laporte@example.com&quot;,
        &quot;url&quot;: &quot;https://legall.com/quo-omnis-quos-sint-debitis-ex-voluptatibus.html&quot;,
        &quot;user_id&quot;: 23,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 55,
        &quot;name&quot;: &quot;Dominique Richard-Morin&quot;,
        &quot;address&quot;: &quot;67, rue Aim&eacute; Lopez\n34760 Menard&quot;,
        &quot;postalCode&quot;: &quot;05821&quot;,
        &quot;city&quot;: &quot;Costa&quot;,
        &quot;email&quot;: &quot;raynaud.jacques@example.com&quot;,
        &quot;url&quot;: &quot;http://www.lemaire.net/optio-voluptatibus-numquam-rerum-fugit-blanditiis-rem-ipsam&quot;,
        &quot;user_id&quot;: 4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 56,
        &quot;name&quot;: &quot;Christelle-Pauline Voisin&quot;,
        &quot;address&quot;: &quot;1, rue Marie\n43097 Tessier-sur-Mer&quot;,
        &quot;postalCode&quot;: &quot;48581&quot;,
        &quot;city&quot;: &quot;LemaitreBourg&quot;,
        &quot;email&quot;: &quot;diane.olivier@example.org&quot;,
        &quot;url&quot;: &quot;http://andre.com/&quot;,
        &quot;user_id&quot;: 26,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;name&quot;: &quot;Marcel Perrin&quot;,
        &quot;address&quot;: &quot;avenue Lemaire\n14583 Allain&quot;,
        &quot;postalCode&quot;: &quot;31262&quot;,
        &quot;city&quot;: &quot;Guillon&quot;,
        &quot;email&quot;: &quot;bernadette86@example.org&quot;,
        &quot;url&quot;: &quot;http://peltier.com/doloremque-voluptates-harum-consequuntur-quia-commodi-alias-laboriosam-aliquam.html&quot;,
        &quot;user_id&quot;: 12,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;name&quot;: &quot;Alexandre-&Eacute;ric Vidal&quot;,
        &quot;address&quot;: &quot;91, rue No&eacute;mi Valette\n94633 RenaultVille&quot;,
        &quot;postalCode&quot;: &quot;60203&quot;,
        &quot;city&quot;: &quot;Ferreira&quot;,
        &quot;email&quot;: &quot;pierre.henry@example.com&quot;,
        &quot;url&quot;: &quot;http://www.gonzalez.fr/voluptatem-aut-facilis-sequi-delectus.html&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 59,
        &quot;name&quot;: &quot;Aim&eacute;e Arnaud&quot;,
        &quot;address&quot;: &quot;1, boulevard de Hernandez\n70157 Julien&quot;,
        &quot;postalCode&quot;: &quot;38353&quot;,
        &quot;city&quot;: &quot;Gilles&quot;,
        &quot;email&quot;: &quot;hsimon@example.net&quot;,
        &quot;url&quot;: &quot;http://www.barthelemy.com/alias-et-aut-autem-odio-aliquam&quot;,
        &quot;user_id&quot;: 24,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 60,
        &quot;name&quot;: &quot;Henriette Grondin&quot;,
        &quot;address&quot;: &quot;5, place de Nicolas\n52145 Germain-la-For&ecirc;t&quot;,
        &quot;postalCode&quot;: &quot;61325&quot;,
        &quot;city&quot;: &quot;Blancnec&quot;,
        &quot;email&quot;: &quot;lpotier@example.net&quot;,
        &quot;url&quot;: &quot;https://muller.org/aliquam-tempora-perspiciatis-quia-dolores.html&quot;,
        &quot;user_id&quot;: 20,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 61,
        &quot;name&quot;: &quot;Xavier Benoit&quot;,
        &quot;address&quot;: &quot;99, chemin de Dumont\n42718 Delattre&quot;,
        &quot;postalCode&quot;: &quot;87463&quot;,
        &quot;city&quot;: &quot;Dufour&quot;,
        &quot;email&quot;: &quot;laurence77@example.net&quot;,
        &quot;url&quot;: &quot;http://etienne.fr/qui-consequatur-dolores-nostrum&quot;,
        &quot;user_id&quot;: 6,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 62,
        &quot;name&quot;: &quot;Maryse Bonnet&quot;,
        &quot;address&quot;: &quot;9, rue Henriette Legrand\n78853 Duval&quot;,
        &quot;postalCode&quot;: &quot;06908&quot;,
        &quot;city&quot;: &quot;Perrin&quot;,
        &quot;email&quot;: &quot;olivie.collin@example.com&quot;,
        &quot;url&quot;: &quot;http://bruneau.org/quibusdam-dolor-quia-repudiandae-temporibus-eum&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 63,
        &quot;name&quot;: &quot;Martin Perrin&quot;,
        &quot;address&quot;: &quot;9, rue Jean Ferrand\n14047 Hebert-sur-Barthelemy&quot;,
        &quot;postalCode&quot;: &quot;00654&quot;,
        &quot;city&quot;: &quot;Marin&quot;,
        &quot;email&quot;: &quot;reynaud.suzanne@example.com&quot;,
        &quot;url&quot;: &quot;https://leblanc.fr/ut-at-similique-deleniti-enim-molestias-eius-blanditiis.html&quot;,
        &quot;user_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 64,
        &quot;name&quot;: &quot;Genevi&egrave;ve Blot&quot;,
        &quot;address&quot;: &quot;boulevard St&eacute;phane Laroche\n89884 Michaud&quot;,
        &quot;postalCode&quot;: &quot;72275&quot;,
        &quot;city&quot;: &quot;Lambert&quot;,
        &quot;email&quot;: &quot;couturier.aurore@example.org&quot;,
        &quot;url&quot;: &quot;http://mathieu.fr/modi-optio-reiciendis-corrupti-et-id&quot;,
        &quot;user_id&quot;: 23,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 65,
        &quot;name&quot;: &quot;Arnaude Guyot&quot;,
        &quot;address&quot;: &quot;61, chemin Guillot\n21697 Martinez&quot;,
        &quot;postalCode&quot;: &quot;09697&quot;,
        &quot;city&quot;: &quot;Leblanc-sur-Richard&quot;,
        &quot;email&quot;: &quot;margaux.nguyen@example.net&quot;,
        &quot;url&quot;: &quot;http://dubois.com/&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 66,
        &quot;name&quot;: &quot;Oc&eacute;ane Maillet&quot;,
        &quot;address&quot;: &quot;75, avenue Suzanne Carre\n90338 Chretienboeuf&quot;,
        &quot;postalCode&quot;: &quot;80077&quot;,
        &quot;city&quot;: &quot;Humbert&quot;,
        &quot;email&quot;: &quot;patricia18@example.com&quot;,
        &quot;url&quot;: &quot;https://laporte.com/autem-error-laudantium-dignissimos-neque.html&quot;,
        &quot;user_id&quot;: 26,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 67,
        &quot;name&quot;: &quot;Richard Blot&quot;,
        &quot;address&quot;: &quot;79, impasse de Benoit\n07019 Garnier&quot;,
        &quot;postalCode&quot;: &quot;91016&quot;,
        &quot;city&quot;: &quot;Pelletier-les-Bains&quot;,
        &quot;email&quot;: &quot;vasseur.adrien@example.org&quot;,
        &quot;url&quot;: &quot;https://www.herve.net/qui-beatae-suscipit-at-est-porro-delectus&quot;,
        &quot;user_id&quot;: 18,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 68,
        &quot;name&quot;: &quot;No&euml;l Gomes-Diallo&quot;,
        &quot;address&quot;: &quot;12, chemin Zo&eacute; Hardy\n23170 Chevalier&quot;,
        &quot;postalCode&quot;: &quot;10618&quot;,
        &quot;city&quot;: &quot;Lemaitre&quot;,
        &quot;email&quot;: &quot;lopes.julien@example.org&quot;,
        &quot;url&quot;: &quot;http://www.weiss.com/est-labore-reprehenderit-quod-autem-optio-laborum-placeat&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 69,
        &quot;name&quot;: &quot;Alfred-Thibault Roy&quot;,
        &quot;address&quot;: &quot;75, avenue de Pruvost\n84986 Barbe&quot;,
        &quot;postalCode&quot;: &quot;79247&quot;,
        &quot;city&quot;: &quot;Marques&quot;,
        &quot;email&quot;: &quot;thomas.blanchard@example.com&quot;,
        &quot;url&quot;: &quot;https://merle.org/iure-est-vitae-molestias-velit.html&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 70,
        &quot;name&quot;: &quot;Marthe de la Gaudin&quot;,
        &quot;address&quot;: &quot;70, impasse de Loiseau\n44780 KleinVille&quot;,
        &quot;postalCode&quot;: &quot;13280&quot;,
        &quot;city&quot;: &quot;Blanc&quot;,
        &quot;email&quot;: &quot;wmenard@example.org&quot;,
        &quot;url&quot;: &quot;http://perrier.com/&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 71,
        &quot;name&quot;: &quot;Laetitia Lebrun&quot;,
        &quot;address&quot;: &quot;70, avenue Monique Diaz\n38978 Grenier-sur-Roy&quot;,
        &quot;postalCode&quot;: &quot;94380&quot;,
        &quot;city&quot;: &quot;Huet-sur-Mer&quot;,
        &quot;email&quot;: &quot;baudry.sophie@example.com&quot;,
        &quot;url&quot;: &quot;http://pelletier.org/repellendus-earum-et-quisquam-accusantium&quot;,
        &quot;user_id&quot;: 13,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 72,
        &quot;name&quot;: &quot;Philippe Bruneau&quot;,
        &quot;address&quot;: &quot;51, place Noel\n26615 Roux&quot;,
        &quot;postalCode&quot;: &quot;42430&quot;,
        &quot;city&quot;: &quot;Lebreton-sur-Durand&quot;,
        &quot;email&quot;: &quot;capucine81@example.com&quot;,
        &quot;url&quot;: &quot;http://mahe.com/aut-in-beatae-et-rerum-reiciendis-dolores.html&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 73,
        &quot;name&quot;: &quot;Emmanuelle Nguyen&quot;,
        &quot;address&quot;: &quot;9, chemin Blin\n59512 LebonBourg&quot;,
        &quot;postalCode&quot;: &quot;10831&quot;,
        &quot;city&quot;: &quot;Besnard&quot;,
        &quot;email&quot;: &quot;jbrunel@example.com&quot;,
        &quot;url&quot;: &quot;http://www.petit.com/maxime-laboriosam-non-commodi-quis-omnis&quot;,
        &quot;user_id&quot;: 14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 74,
        &quot;name&quot;: &quot;Roger de la Boulay&quot;,
        &quot;address&quot;: &quot;16, rue Dupuy\n91298 Jean-sur-Charles&quot;,
        &quot;postalCode&quot;: &quot;59403&quot;,
        &quot;city&quot;: &quot;DupuisBourg&quot;,
        &quot;email&quot;: &quot;dominique49@example.org&quot;,
        &quot;url&quot;: &quot;http://www.laine.fr/aspernatur-quia-illo-omnis&quot;,
        &quot;user_id&quot;: 28,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 75,
        &quot;name&quot;: &quot;Louis Rodriguez-Lenoir&quot;,
        &quot;address&quot;: &quot;5, boulevard de Faivre\n15410 HubertVille&quot;,
        &quot;postalCode&quot;: &quot;24438&quot;,
        &quot;city&quot;: &quot;Roger&quot;,
        &quot;email&quot;: &quot;mbrunel@example.net&quot;,
        &quot;url&quot;: &quot;http://www.gautier.net/aut-quos-eius-velit.html&quot;,
        &quot;user_id&quot;: 9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 76,
        &quot;name&quot;: &quot;Isaac-Th&eacute;ophile Mendes&quot;,
        &quot;address&quot;: &quot;65, chemin de Martineau\n46994 Neveu&quot;,
        &quot;postalCode&quot;: &quot;61780&quot;,
        &quot;city&quot;: &quot;Diaz&quot;,
        &quot;email&quot;: &quot;camille67@example.org&quot;,
        &quot;url&quot;: &quot;http://aubry.fr/aut-consequatur-nobis-distinctio-quo-aut-voluptas.html&quot;,
        &quot;user_id&quot;: 24,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 77,
        &quot;name&quot;: &quot;&Eacute;mile-J&eacute;r&ocirc;me Collet&quot;,
        &quot;address&quot;: &quot;2, impasse &Eacute;ric Barbier\n78135 Girard&quot;,
        &quot;postalCode&quot;: &quot;10764&quot;,
        &quot;city&quot;: &quot;Delahaye&quot;,
        &quot;email&quot;: &quot;chantal42@example.com&quot;,
        &quot;url&quot;: &quot;http://ramos.fr/est-error-consequuntur-quis&quot;,
        &quot;user_id&quot;: 20,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 78,
        &quot;name&quot;: &quot;Jules Dupont-Leconte&quot;,
        &quot;address&quot;: &quot;impasse William Perret\n39562 Martelboeuf&quot;,
        &quot;postalCode&quot;: &quot;31514&quot;,
        &quot;city&quot;: &quot;Wagner&quot;,
        &quot;email&quot;: &quot;susanne06@example.net&quot;,
        &quot;url&quot;: &quot;http://www.antoine.fr/eum-voluptatem-numquam-praesentium-omnis-necessitatibus-quis-sed.html&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 79,
        &quot;name&quot;: &quot;P&eacute;n&eacute;lope-C&eacute;line Pierre&quot;,
        &quot;address&quot;: &quot;29, chemin de Gillet\n45160 Lemoine&quot;,
        &quot;postalCode&quot;: &quot;89209&quot;,
        &quot;city&quot;: &quot;Ferrandboeuf&quot;,
        &quot;email&quot;: &quot;celine.petit@example.org&quot;,
        &quot;url&quot;: &quot;https://dufour.net/qui-eaque-aut-sapiente-voluptatum.html&quot;,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 80,
        &quot;name&quot;: &quot;Michelle Renault-Adam&quot;,
        &quot;address&quot;: &quot;impasse Begue\n48553 Diallo&quot;,
        &quot;postalCode&quot;: &quot;64287&quot;,
        &quot;city&quot;: &quot;Rollanddan&quot;,
        &quot;email&quot;: &quot;gilbert.emilie@example.com&quot;,
        &quot;url&quot;: &quot;http://pierre.net/tempora-qui-veniam-dolore-laudantium-porro&quot;,
        &quot;user_id&quot;: 26,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 81,
        &quot;name&quot;: &quot;Maryse Martel&quot;,
        &quot;address&quot;: &quot;13, rue Grenier\n64612 Gay&quot;,
        &quot;postalCode&quot;: &quot;87535&quot;,
        &quot;city&quot;: &quot;Barbe-la-For&ecirc;t&quot;,
        &quot;email&quot;: &quot;dumont.rene@example.org&quot;,
        &quot;url&quot;: &quot;http://www.becker.com/fugiat-sed-ut-mollitia-inventore-quis-voluptas-fugiat.html&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 82,
        &quot;name&quot;: &quot;Olivier Lacombe-Mahe&quot;,
        &quot;address&quot;: &quot;99, avenue Garcia\n52955 Gregoire&quot;,
        &quot;postalCode&quot;: &quot;53572&quot;,
        &quot;city&quot;: &quot;Petitjean-sur-Mer&quot;,
        &quot;email&quot;: &quot;lamy.arnaude@example.net&quot;,
        &quot;url&quot;: &quot;http://schmitt.org/esse-quam-sit-accusantium-dignissimos-laboriosam-commodi.html&quot;,
        &quot;user_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 83,
        &quot;name&quot;: &quot;Daniel Pascal&quot;,
        &quot;address&quot;: &quot;860, boulevard Munoz\n57085 Leclerc-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;75973&quot;,
        &quot;city&quot;: &quot;Teixeiradan&quot;,
        &quot;email&quot;: &quot;christophe.dubois@example.net&quot;,
        &quot;url&quot;: &quot;http://delannoy.fr/dolore-est-fugit-aspernatur&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 84,
        &quot;name&quot;: &quot;&Eacute;ric Durand&quot;,
        &quot;address&quot;: &quot;58, impasse S&eacute;bastien Dupont\n28651 Ruiz&quot;,
        &quot;postalCode&quot;: &quot;44257&quot;,
        &quot;city&quot;: &quot;Allard&quot;,
        &quot;email&quot;: &quot;louis77@example.com&quot;,
        &quot;url&quot;: &quot;https://www.mendes.fr/sunt-sunt-molestias-iste-rerum&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 85,
        &quot;name&quot;: &quot;Augustin de Poulain&quot;,
        &quot;address&quot;: &quot;80, rue de Gros\n74418 Rousset-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;28828&quot;,
        &quot;city&quot;: &quot;PottierBourg&quot;,
        &quot;email&quot;: &quot;marc.jacquot@example.net&quot;,
        &quot;url&quot;: &quot;https://becker.fr/dolor-aliquam-similique-aut-est-quidem-autem.html&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 86,
        &quot;name&quot;: &quot;Thibault Roger&quot;,
        &quot;address&quot;: &quot;48, chemin Guillaume Diallo\n02090 Lenoir-la-For&ecirc;t&quot;,
        &quot;postalCode&quot;: &quot;93570&quot;,
        &quot;city&quot;: &quot;Courtois-sur-Rocher&quot;,
        &quot;email&quot;: &quot;corinne54@example.net&quot;,
        &quot;url&quot;: &quot;http://ferrand.fr/vero-repudiandae-cumque-quas-sit-omnis-ea&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 87,
        &quot;name&quot;: &quot;Daniel Ferrand&quot;,
        &quot;address&quot;: &quot;74, place de Roux\n59395 Raymond&quot;,
        &quot;postalCode&quot;: &quot;00649&quot;,
        &quot;city&quot;: &quot;Da Silvadan&quot;,
        &quot;email&quot;: &quot;obesson@example.com&quot;,
        &quot;url&quot;: &quot;http://www.gauthier.com/blanditiis-et-dolor-consectetur&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 88,
        &quot;name&quot;: &quot;Jos&eacute;phine-Ana&iuml;s Peron&quot;,
        &quot;address&quot;: &quot;73, avenue Charpentier\n49500 Bazindan&quot;,
        &quot;postalCode&quot;: &quot;51509&quot;,
        &quot;city&quot;: &quot;Jacob&quot;,
        &quot;email&quot;: &quot;patrick84@example.net&quot;,
        &quot;url&quot;: &quot;http://www.raymond.fr/voluptas-aut-asperiores-quam-adipisci&quot;,
        &quot;user_id&quot;: 18,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 89,
        &quot;name&quot;: &quot;Marianne-Andr&eacute;e Prevost&quot;,
        &quot;address&quot;: &quot;avenue Lacombe\n17042 Torres-sur-Lejeune&quot;,
        &quot;postalCode&quot;: &quot;96974&quot;,
        &quot;city&quot;: &quot;Munoz-les-Bains&quot;,
        &quot;email&quot;: &quot;afaure@example.net&quot;,
        &quot;url&quot;: &quot;https://www.grenier.fr/qui-et-vitae-adipisci-consectetur-et-ut-laborum&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 90,
        &quot;name&quot;: &quot;Th&eacute;odore Muller&quot;,
        &quot;address&quot;: &quot;88, avenue de Deschamps\n22337 LecoqVille&quot;,
        &quot;postalCode&quot;: &quot;29143&quot;,
        &quot;city&quot;: &quot;Voisin&quot;,
        &quot;email&quot;: &quot;robert.marc@example.org&quot;,
        &quot;url&quot;: &quot;http://torres.com/repudiandae-dolor-temporibus-sed-rerum-quibusdam-vitae-cumque&quot;,
        &quot;user_id&quot;: 13,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 91,
        &quot;name&quot;: &quot;Jules Sanchez&quot;,
        &quot;address&quot;: &quot;538, boulevard Margot Vallee\n46706 Noel&quot;,
        &quot;postalCode&quot;: &quot;00529&quot;,
        &quot;city&quot;: &quot;Hubert&quot;,
        &quot;email&quot;: &quot;descamps.marine@example.com&quot;,
        &quot;url&quot;: &quot;http://www.mathieu.fr/ut-quisquam-eos-repellat-qui-ratione-odit.html&quot;,
        &quot;user_id&quot;: 9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 92,
        &quot;name&quot;: &quot;Richard Lagarde&quot;,
        &quot;address&quot;: &quot;381, rue Emmanuel Laurent\n98851 Leclercq-sur-Regnier&quot;,
        &quot;postalCode&quot;: &quot;76647&quot;,
        &quot;city&quot;: &quot;PerrierVille&quot;,
        &quot;email&quot;: &quot;lelievre.benjamin@example.net&quot;,
        &quot;url&quot;: &quot;http://www.thomas.fr/&quot;,
        &quot;user_id&quot;: 15,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 93,
        &quot;name&quot;: &quot;Emmanuel Weber&quot;,
        &quot;address&quot;: &quot;39, chemin Mich&egrave;le Rousset\n71245 Hamon-sur-Gilbert&quot;,
        &quot;postalCode&quot;: &quot;09218&quot;,
        &quot;city&quot;: &quot;Denis&quot;,
        &quot;email&quot;: &quot;broyer@example.net&quot;,
        &quot;url&quot;: &quot;https://www.jacques.com/est-in-iure-rerum-esse-eos-repellat&quot;,
        &quot;user_id&quot;: 7,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 94,
        &quot;name&quot;: &quot;Claire-Cl&eacute;mence Prevost&quot;,
        &quot;address&quot;: &quot;154, boulevard Aim&eacute; Levy\n26896 Peltier&quot;,
        &quot;postalCode&quot;: &quot;72688&quot;,
        &quot;city&quot;: &quot;Bertin&quot;,
        &quot;email&quot;: &quot;petit.audrey@example.net&quot;,
        &quot;url&quot;: &quot;http://www.pineau.org/dolores-eveniet-numquam-deleniti-qui.html&quot;,
        &quot;user_id&quot;: 9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 95,
        &quot;name&quot;: &quot;William Royer&quot;,
        &quot;address&quot;: &quot;2, boulevard de Georges\n78305 Leroynec&quot;,
        &quot;postalCode&quot;: &quot;11248&quot;,
        &quot;city&quot;: &quot;Traore&quot;,
        &quot;email&quot;: &quot;gallet.alexandre@example.net&quot;,
        &quot;url&quot;: &quot;http://arnaud.fr/&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 96,
        &quot;name&quot;: &quot;Benjamin-Honor&eacute; Imbert&quot;,
        &quot;address&quot;: &quot;11, place Michaud\n52882 BarbierVille&quot;,
        &quot;postalCode&quot;: &quot;37536&quot;,
        &quot;city&quot;: &quot;Munoz&quot;,
        &quot;email&quot;: &quot;philippe.diallo@example.com&quot;,
        &quot;url&quot;: &quot;http://www.gregoire.com/est-quis-sint-sed-laboriosam-quam-consequatur-consectetur&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 97,
        &quot;name&quot;: &quot;P&eacute;n&eacute;lope Gallet&quot;,
        &quot;address&quot;: &quot;88, avenue Beno&icirc;t Auger\n66574 Durand&quot;,
        &quot;postalCode&quot;: &quot;09073&quot;,
        &quot;city&quot;: &quot;Le Gall&quot;,
        &quot;email&quot;: &quot;celine92@example.org&quot;,
        &quot;url&quot;: &quot;http://laurent.org/et-qui-distinctio-et-et-culpa-est&quot;,
        &quot;user_id&quot;: 19,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 98,
        &quot;name&quot;: &quot;Patricia Lemaire&quot;,
        &quot;address&quot;: &quot;215, rue Benard\n96908 Guillou-sur-Mer&quot;,
        &quot;postalCode&quot;: &quot;98693&quot;,
        &quot;city&quot;: &quot;CosteVille&quot;,
        &quot;email&quot;: &quot;oceane66@example.org&quot;,
        &quot;url&quot;: &quot;http://www.vasseur.com/&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 99,
        &quot;name&quot;: &quot;Denise Simon-Etienne&quot;,
        &quot;address&quot;: &quot;72, avenue de Toussaint\n25535 Remy&quot;,
        &quot;postalCode&quot;: &quot;61714&quot;,
        &quot;city&quot;: &quot;Blanchardboeuf&quot;,
        &quot;email&quot;: &quot;celina.petitjean@example.org&quot;,
        &quot;url&quot;: &quot;http://www.lelievre.com/et-voluptatem-cum-nemo-in&quot;,
        &quot;user_id&quot;: 25,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 100,
        &quot;name&quot;: &quot;Nicole Ramos&quot;,
        &quot;address&quot;: &quot;68, chemin Dominique Poirier\n43241 Bousquet-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;74978&quot;,
        &quot;city&quot;: &quot;RousseauBourg&quot;,
        &quot;email&quot;: &quot;aime.ferreira@example.com&quot;,
        &quot;url&quot;: &quot;http://www.millet.fr/et-quia-laborum-voluptates-voluptates.html&quot;,
        &quot;user_id&quot;: 28,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-customers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-customers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-customers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-customers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-customers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-customers" data-method="GET"
      data-path="api/v1/customers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-customers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-customers"
                    onclick="tryItOut('GETapi-v1-customers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-customers"
                    onclick="cancelTryOut('GETapi-v1-customers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-customers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/customers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-customers">POST api/v1/customers</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-customers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://ali-api.test/api/v1/customers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/customers"
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

<span id="example-responses-POSTapi-v1-customers">
</span>
<span id="execution-results-POSTapi-v1-customers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-customers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-customers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-customers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-customers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-customers" data-method="POST"
      data-path="api/v1/customers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-customers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-customers"
                    onclick="tryItOut('POSTapi-v1-customers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-customers"
                    onclick="cancelTryOut('POSTapi-v1-customers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-customers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/customers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-customers--id-">GET api/v1/customers/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-customers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/customers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/customers/1"
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

<span id="example-responses-GETapi-v1-customers--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Simone-Adrienne Salmon&quot;,
    &quot;address&quot;: &quot;17, place de Leroux\n92561 Rouxboeuf&quot;,
    &quot;postalCode&quot;: &quot;93328&quot;,
    &quot;city&quot;: &quot;Briandboeuf&quot;,
    &quot;email&quot;: &quot;adele21@example.org&quot;,
    &quot;url&quot;: &quot;http://bonnin.fr/&quot;,
    &quot;user_id&quot;: 14,
    &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-customers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-customers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-customers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-customers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-customers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-customers--id-" data-method="GET"
      data-path="api/v1/customers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-customers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-customers--id-"
                    onclick="tryItOut('GETapi-v1-customers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-customers--id-"
                    onclick="cancelTryOut('GETapi-v1-customers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-customers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/customers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-customers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-customers--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-customers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the customer. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-customers--id-">PUT api/v1/customers/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-customers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://ali-api.test/api/v1/customers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/customers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-customers--id-">
</span>
<span id="execution-results-PUTapi-v1-customers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-customers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-customers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-customers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-customers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-customers--id-" data-method="PUT"
      data-path="api/v1/customers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-customers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-customers--id-"
                    onclick="tryItOut('PUTapi-v1-customers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-customers--id-"
                    onclick="cancelTryOut('PUTapi-v1-customers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-customers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/customers/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/customers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-customers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-customers--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-customers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the customer. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-category">GET api/v1/category</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/category" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/category"
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

<span id="example-responses-GETapi-v1-category">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;name&quot;: &quot;Josette-Marguerite Riou&quot;
    },
    {
        &quot;name&quot;: &quot;Thibaut Faure&quot;
    },
    {
        &quot;name&quot;: &quot;Zacharie Foucher&quot;
    },
    {
        &quot;name&quot;: &quot;Isabelle Prevost-Lebreton&quot;
    },
    {
        &quot;name&quot;: &quot;Adrien Dupre-Mathieu&quot;
    },
    {
        &quot;name&quot;: &quot;S&eacute;bastien Leger&quot;
    },
    {
        &quot;name&quot;: &quot;V&eacute;ronique Verdier&quot;
    },
    {
        &quot;name&quot;: &quot;L&eacute;on Schmitt&quot;
    },
    {
        &quot;name&quot;: &quot;&Eacute;dith Guibert&quot;
    },
    {
        &quot;name&quot;: &quot;Thibaut-Pierre Breton&quot;
    },
    {
        &quot;name&quot;: &quot;Denise Riou&quot;
    },
    {
        &quot;name&quot;: &quot;Margot Charpentier&quot;
    },
    {
        &quot;name&quot;: &quot;R&eacute;my Delaunay&quot;
    },
    {
        &quot;name&quot;: &quot;Joseph Samson&quot;
    },
    {
        &quot;name&quot;: &quot;Lucas Labbe&quot;
    },
    {
        &quot;name&quot;: &quot;Capucine Le Mallet&quot;
    },
    {
        &quot;name&quot;: &quot;No&eacute;mi Cordier-Pires&quot;
    },
    {
        &quot;name&quot;: &quot;Isaac Durand&quot;
    },
    {
        &quot;name&quot;: &quot;Paulette-Aurore Blot&quot;
    },
    {
        &quot;name&quot;: &quot;Fr&eacute;d&eacute;rique Collin&quot;
    },
    {
        &quot;name&quot;: &quot;Guillaume Alves&quot;
    },
    {
        &quot;name&quot;: &quot;Laurent Lemaitre&quot;
    },
    {
        &quot;name&quot;: &quot;Andr&eacute;e-Caroline Loiseau&quot;
    },
    {
        &quot;name&quot;: &quot;Franck Dupre&quot;
    },
    {
        &quot;name&quot;: &quot;Doroth&eacute;e Munoz&quot;
    },
    {
        &quot;name&quot;: &quot;Daniel Poirier&quot;
    },
    {
        &quot;name&quot;: &quot;Gilles Le Peron&quot;
    },
    {
        &quot;name&quot;: &quot;In&egrave;s de la Ferreira&quot;
    },
    {
        &quot;name&quot;: &quot;Philippe Simon-Charles&quot;
    },
    {
        &quot;name&quot;: &quot;V&eacute;ronique Leclercq&quot;
    },
    {
        &quot;name&quot;: &quot;Bernard Rousset&quot;
    },
    {
        &quot;name&quot;: &quot;Jeannine Le Charpentier&quot;
    },
    {
        &quot;name&quot;: &quot;Martine Gimenez&quot;
    },
    {
        &quot;name&quot;: &quot;Sylvie Carlier-Martinez&quot;
    },
    {
        &quot;name&quot;: &quot;Zacharie Aubry&quot;
    },
    {
        &quot;name&quot;: &quot;Camille-C&eacute;cile Samson&quot;
    },
    {
        &quot;name&quot;: &quot;Virginie Gros&quot;
    },
    {
        &quot;name&quot;: &quot;Alfred Lopez&quot;
    },
    {
        &quot;name&quot;: &quot;Vincent Girard&quot;
    },
    {
        &quot;name&quot;: &quot;Fran&ccedil;ois Jacob&quot;
    },
    {
        &quot;name&quot;: &quot;Fr&eacute;d&eacute;ric-Nicolas Fernandez&quot;
    },
    {
        &quot;name&quot;: &quot;Philippe Lecomte&quot;
    },
    {
        &quot;name&quot;: &quot;Laetitia Le Bruneau&quot;
    },
    {
        &quot;name&quot;: &quot;R&eacute;my-Luc Hoareau&quot;
    },
    {
        &quot;name&quot;: &quot;Ad&egrave;le du Dumont&quot;
    },
    {
        &quot;name&quot;: &quot;Gr&eacute;goire Lejeune&quot;
    },
    {
        &quot;name&quot;: &quot;L&eacute;on-Denis Auger&quot;
    },
    {
        &quot;name&quot;: &quot;V&eacute;ronique Le Goff&quot;
    },
    {
        &quot;name&quot;: &quot;Isaac de la Gosselin&quot;
    },
    {
        &quot;name&quot;: &quot;Dominique Dupre&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-category"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-category">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-category" data-method="GET"
      data-path="api/v1/category"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-category"
                    onclick="tryItOut('GETapi-v1-category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-category"
                    onclick="cancelTryOut('GETapi-v1-category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-category"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/category</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-category">POST api/v1/category</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://ali-api.test/api/v1/category" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/category"
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

<span id="example-responses-POSTapi-v1-category">
</span>
<span id="execution-results-POSTapi-v1-category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-category"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-category">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-category" data-method="POST"
      data-path="api/v1/category"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-category"
                    onclick="tryItOut('POSTapi-v1-category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-category"
                    onclick="cancelTryOut('POSTapi-v1-category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-category"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/category</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-v1-category--id-">PUT api/v1/category/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://ali-api.test/api/v1/category/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/category/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-category--id-">
</span>
<span id="execution-results-PUTapi-v1-category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-category--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-category--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-category--id-" data-method="PUT"
      data-path="api/v1/category/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-category--id-"
                    onclick="tryItOut('PUTapi-v1-category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-category--id-"
                    onclick="cancelTryOut('PUTapi-v1-category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-category--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/category/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/category/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-category--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-category--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-category--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-category--id-">DELETE api/v1/category/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://ali-api.test/api/v1/category/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/category/1"
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

<span id="example-responses-DELETEapi-v1-category--id-">
</span>
<span id="execution-results-DELETEapi-v1-category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-category--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-category--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-category--id-" data-method="DELETE"
      data-path="api/v1/category/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-category--id-"
                    onclick="tryItOut('DELETEapi-v1-category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-category--id-"
                    onclick="cancelTryOut('DELETEapi-v1-category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-category--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/category/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-category--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-category--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-category--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-orders">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/orders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/orders"
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

<span id="example-responses-GETapi-v1-orders">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;reference&quot;: &quot;sapiente&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 63.4238267,
        &quot;amountVAT&quot;: 118.37,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;reference&quot;: &quot;ullam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 71,
        &quot;amountET&quot;: 3738727.47,
        &quot;amountVAT&quot;: 1532.45,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;reference&quot;: &quot;architecto&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 8.746,
        &quot;amountVAT&quot;: 605.4313618,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;reference&quot;: &quot;ex&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 8.5518109,
        &quot;amountVAT&quot;: 89738.53126,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;reference&quot;: &quot;est&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 90,
        &quot;amountET&quot;: 670.6503756,
        &quot;amountVAT&quot;: 3167160.9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 79,
        &quot;amountET&quot;: 738295,
        &quot;amountVAT&quot;: 106243.938,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;reference&quot;: &quot;impedit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 19,
        &quot;amountET&quot;: 66157.475,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;reference&quot;: &quot;perferendis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 3,
        &quot;amountET&quot;: 19904.8230984,
        &quot;amountVAT&quot;: 2.5862748,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;reference&quot;: &quot;ipsam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 10,
        &quot;amountET&quot;: 34.100681,
        &quot;amountVAT&quot;: 20.52,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;reference&quot;: &quot;est&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 7,
        &quot;amountET&quot;: 837.8,
        &quot;amountVAT&quot;: 588115.979,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;reference&quot;: &quot;doloremque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 67,
        &quot;amountET&quot;: 3.6733119,
        &quot;amountVAT&quot;: 1412602,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;reference&quot;: &quot;autem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 25,
        &quot;amountET&quot;: 1099.217,
        &quot;amountVAT&quot;: 452,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;reference&quot;: &quot;aut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 0.73,
        &quot;amountVAT&quot;: 373.17528,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;reference&quot;: &quot;nihil&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 326839740.79536,
        &quot;amountVAT&quot;: 43.403338219,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;reference&quot;: &quot;sequi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 57,
        &quot;amountET&quot;: 52.3613,
        &quot;amountVAT&quot;: 23524.35501475,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;reference&quot;: &quot;beatae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 523998.2,
        &quot;amountVAT&quot;: 1751.0713654,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;reference&quot;: &quot;laboriosam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 11,
        &quot;amountET&quot;: 2229.01,
        &quot;amountVAT&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 49,
        &quot;amountET&quot;: 956790199.03567,
        &quot;amountVAT&quot;: 5173921.176754,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;reference&quot;: &quot;eligendi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 58,
        &quot;amountET&quot;: 392.8937,
        &quot;amountVAT&quot;: 420798203.1328,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;reference&quot;: &quot;incidunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 62,
        &quot;amountET&quot;: 2802227.4653334,
        &quot;amountVAT&quot;: 8182541.5773489,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;reference&quot;: &quot;odit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 42,
        &quot;amountET&quot;: 2912629,
        &quot;amountVAT&quot;: 50140.5583637,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;reference&quot;: &quot;vel&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 61,
        &quot;amountET&quot;: 46953.78026262,
        &quot;amountVAT&quot;: 51527977.311193,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;reference&quot;: &quot;necessitatibus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 4280.5797281,
        &quot;amountVAT&quot;: 407.24366,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;reference&quot;: &quot;maxime&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 68,
        &quot;amountET&quot;: 1027.7088801,
        &quot;amountVAT&quot;: 7826,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;reference&quot;: &quot;ab&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 2822264.70064,
        &quot;amountVAT&quot;: 4605.841,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;reference&quot;: &quot;exercitationem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 57,
        &quot;amountET&quot;: 0.448438,
        &quot;amountVAT&quot;: 5735.972535267,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;reference&quot;: &quot;natus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 74,
        &quot;amountET&quot;: 5459.326,
        &quot;amountVAT&quot;: 670543.438402,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;reference&quot;: &quot;quae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 305.9679,
        &quot;amountVAT&quot;: 38200.26,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;reference&quot;: &quot;asperiores&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 37,
        &quot;amountET&quot;: 3691.06,
        &quot;amountVAT&quot;: 49091.173,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;reference&quot;: &quot;vero&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 53,
        &quot;amountET&quot;: 190998408.17271,
        &quot;amountVAT&quot;: 170.1758,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 21,
        &quot;amountET&quot;: 425.7785,
        &quot;amountVAT&quot;: 67893787.3028,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;reference&quot;: &quot;distinctio&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 94,
        &quot;amountET&quot;: 7291439,
        &quot;amountVAT&quot;: 222.881854,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 85,
        &quot;amountET&quot;: 29.872,
        &quot;amountVAT&quot;: 108317412.5861,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;reference&quot;: &quot;voluptas&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 99,
        &quot;amountET&quot;: 293.12555,
        &quot;amountVAT&quot;: 23585.6875384,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;reference&quot;: &quot;in&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 64,
        &quot;amountET&quot;: 11.68777672,
        &quot;amountVAT&quot;: 2.55820055,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;reference&quot;: &quot;ipsam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 75,
        &quot;amountET&quot;: 2740.278408168,
        &quot;amountVAT&quot;: 2986246.0650825,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 21,
        &quot;amountET&quot;: 85615582.377,
        &quot;amountVAT&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;reference&quot;: &quot;aliquid&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 158975.7413055,
        &quot;amountVAT&quot;: 2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;reference&quot;: &quot;ipsa&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 66,
        &quot;amountET&quot;: 10644.8423085,
        &quot;amountVAT&quot;: 0.51747105,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;reference&quot;: &quot;quam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 45,
        &quot;amountET&quot;: 5528.802520097,
        &quot;amountVAT&quot;: 2728.32212235,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;reference&quot;: &quot;voluptas&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 54,
        &quot;amountET&quot;: 21248.8815462,
        &quot;amountVAT&quot;: 64103,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;reference&quot;: &quot;reprehenderit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 42,
        &quot;amountET&quot;: 4426476.3751439,
        &quot;amountVAT&quot;: 651193.763,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 51,
        &quot;amountET&quot;: 263421.5,
        &quot;amountVAT&quot;: 61133906.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;reference&quot;: &quot;laboriosam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 39,
        &quot;amountET&quot;: 199.1,
        &quot;amountVAT&quot;: 278502173.894,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;reference&quot;: &quot;eligendi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 1,
        &quot;amountET&quot;: 211.12051,
        &quot;amountVAT&quot;: 28905.7576,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;reference&quot;: &quot;sunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 99,
        &quot;amountET&quot;: 0.821,
        &quot;amountVAT&quot;: 122455.127,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;reference&quot;: &quot;cupiditate&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 60,
        &quot;amountET&quot;: 228273478.67782,
        &quot;amountVAT&quot;: 7558032.8539,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;reference&quot;: &quot;dolor&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 2,
        &quot;amountET&quot;: 15085875.357,
        &quot;amountVAT&quot;: 2922997.1142216,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;reference&quot;: &quot;repudiandae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 37,
        &quot;amountET&quot;: 0.28533207,
        &quot;amountVAT&quot;: 50960218.48,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;reference&quot;: &quot;possimus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 49,
        &quot;amountET&quot;: 573876.25631515,
        &quot;amountVAT&quot;: 1150.697943,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;reference&quot;: &quot;consequatur&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 79,
        &quot;amountET&quot;: 178.6,
        &quot;amountVAT&quot;: 1304.3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;reference&quot;: &quot;eligendi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 68,
        &quot;amountET&quot;: 51816.11,
        &quot;amountVAT&quot;: 99.2458,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;reference&quot;: &quot;praesentium&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 18,
        &quot;amountET&quot;: 683.1,
        &quot;amountVAT&quot;: 12284559.147543,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 71,
        &quot;amountET&quot;: 30.88,
        &quot;amountVAT&quot;: 207291220.5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 55,
        &quot;reference&quot;: &quot;ea&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 69,
        &quot;amountET&quot;: 31.5,
        &quot;amountVAT&quot;: 359111.46532,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 56,
        &quot;reference&quot;: &quot;magni&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 54,
        &quot;amountET&quot;: 45.56543,
        &quot;amountVAT&quot;: 500.706,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 6.6,
        &quot;amountVAT&quot;: 160.2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;reference&quot;: &quot;cumque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 27,
        &quot;amountET&quot;: 6.7,
        &quot;amountVAT&quot;: 36449887.42,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 59,
        &quot;reference&quot;: &quot;odio&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 100,
        &quot;amountET&quot;: 2984,
        &quot;amountVAT&quot;: 685730047.50874,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 60,
        &quot;reference&quot;: &quot;provident&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 0.75,
        &quot;amountVAT&quot;: 643.598,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 61,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 45,
        &quot;amountET&quot;: 308.29482,
        &quot;amountVAT&quot;: 59521.6989313,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 62,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 43,
        &quot;amountET&quot;: 5755.6185388,
        &quot;amountVAT&quot;: 50373.461868654,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 63,
        &quot;reference&quot;: &quot;perferendis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 7,
        &quot;amountET&quot;: 1.758459,
        &quot;amountVAT&quot;: 0.70971013,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 64,
        &quot;reference&quot;: &quot;labore&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 165.4,
        &quot;amountVAT&quot;: 87017.275,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 65,
        &quot;reference&quot;: &quot;a&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 7542.8,
        &quot;amountVAT&quot;: 82382093.5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 66,
        &quot;reference&quot;: &quot;quod&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 83,
        &quot;amountET&quot;: 127912.4345115,
        &quot;amountVAT&quot;: 21503523.14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 67,
        &quot;reference&quot;: &quot;assumenda&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 77364.76010483,
        &quot;amountVAT&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 68,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 70,
        &quot;amountET&quot;: 212.39,
        &quot;amountVAT&quot;: 1584345.7438231,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 69,
        &quot;reference&quot;: &quot;provident&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 96,
        &quot;amountET&quot;: 31085925.643153,
        &quot;amountVAT&quot;: 175.23312659,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 70,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 98,
        &quot;amountET&quot;: 6079,
        &quot;amountVAT&quot;: 1054888.438,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 71,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 73,
        &quot;amountET&quot;: 65.9,
        &quot;amountVAT&quot;: 478587.7013,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 72,
        &quot;reference&quot;: &quot;modi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 95,
        &quot;amountET&quot;: 570020.41,
        &quot;amountVAT&quot;: 113018.8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 73,
        &quot;reference&quot;: &quot;perspiciatis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 23,
        &quot;amountET&quot;: 0.21577,
        &quot;amountVAT&quot;: 496193.3302,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 74,
        &quot;reference&quot;: &quot;sed&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 43,
        &quot;amountET&quot;: 75791.271086819,
        &quot;amountVAT&quot;: 31141,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 75,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 60,
        &quot;amountET&quot;: 8255581,
        &quot;amountVAT&quot;: 142,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 76,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 79,
        &quot;amountET&quot;: 11.9574143,
        &quot;amountVAT&quot;: 3651629.5855434,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 77,
        &quot;reference&quot;: &quot;totam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 77,
        &quot;amountET&quot;: 520640.0746,
        &quot;amountVAT&quot;: 50709,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 78,
        &quot;reference&quot;: &quot;sit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 98,
        &quot;amountET&quot;: 398682491.984,
        &quot;amountVAT&quot;: 54272.96029347,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 79,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 30,
        &quot;amountET&quot;: 8161355.937,
        &quot;amountVAT&quot;: 6455,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 80,
        &quot;reference&quot;: &quot;voluptatem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 81,
        &quot;amountET&quot;: 0.79,
        &quot;amountVAT&quot;: 551.2201,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 81,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 510.666782332,
        &quot;amountVAT&quot;: 227757.9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 82,
        &quot;reference&quot;: &quot;perspiciatis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 28,
        &quot;amountET&quot;: 5,
        &quot;amountVAT&quot;: 36,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 83,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 22,
        &quot;amountET&quot;: 12431963.41,
        &quot;amountVAT&quot;: 28057.59649458,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 84,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 24,
        &quot;amountET&quot;: 4.52,
        &quot;amountVAT&quot;: 233709.00970459,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 85,
        &quot;reference&quot;: &quot;laborum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 50,
        &quot;amountET&quot;: 518.234,
        &quot;amountVAT&quot;: 5630.22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 86,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 28,
        &quot;amountET&quot;: 11726.2152798,
        &quot;amountVAT&quot;: 503127.61088224,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 87,
        &quot;reference&quot;: &quot;aliquid&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 55700446,
        &quot;amountVAT&quot;: 20151453.1643,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 88,
        &quot;reference&quot;: &quot;dolore&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 77,
        &quot;amountET&quot;: 18.432262636,
        &quot;amountVAT&quot;: 194959.7604762,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 89,
        &quot;reference&quot;: &quot;atque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 48.212572796,
        &quot;amountVAT&quot;: 1932.61233237,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 90,
        &quot;reference&quot;: &quot;tempora&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 68,
        &quot;amountET&quot;: 20264.18,
        &quot;amountVAT&quot;: 29229587.24,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 91,
        &quot;reference&quot;: &quot;facilis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 15,
        &quot;amountET&quot;: 131,
        &quot;amountVAT&quot;: 1836.4556373,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 92,
        &quot;reference&quot;: &quot;sed&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 63,
        &quot;amountET&quot;: 1.6174,
        &quot;amountVAT&quot;: 83290143.768175,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 93,
        &quot;reference&quot;: &quot;deserunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 80,
        &quot;amountET&quot;: 6040389.8572539,
        &quot;amountVAT&quot;: 50639.950548,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 94,
        &quot;reference&quot;: &quot;minima&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 99,
        &quot;amountET&quot;: 0.99677812,
        &quot;amountVAT&quot;: 37191.28570658,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 95,
        &quot;reference&quot;: &quot;quaerat&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 99,
        &quot;amountET&quot;: 62748528.82,
        &quot;amountVAT&quot;: 6210816.45,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 96,
        &quot;reference&quot;: &quot;aut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 100,
        &quot;amountET&quot;: 2.944798,
        &quot;amountVAT&quot;: 777.9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 97,
        &quot;reference&quot;: &quot;quis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 43,
        &quot;amountET&quot;: 209068.90587556,
        &quot;amountVAT&quot;: 10635430.43655,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 98,
        &quot;reference&quot;: &quot;voluptates&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 78,
        &quot;amountET&quot;: 396759.64782,
        &quot;amountVAT&quot;: 6733799.5200663,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 99,
        &quot;reference&quot;: &quot;neque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 16402136.800849,
        &quot;amountVAT&quot;: 11285719.682846,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 100,
        &quot;reference&quot;: &quot;distinctio&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 0.03,
        &quot;amountVAT&quot;: 21829703.138367,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 101,
        &quot;reference&quot;: &quot;eos&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 85,
        &quot;amountET&quot;: 7.1203594,
        &quot;amountVAT&quot;: 193.883161,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 102,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 14,
        &quot;amountET&quot;: 185.5001,
        &quot;amountVAT&quot;: 0.969626,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 103,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 49.382940249,
        &quot;amountVAT&quot;: 60210949.195075,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 104,
        &quot;reference&quot;: &quot;non&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 93,
        &quot;amountET&quot;: 132172.209,
        &quot;amountVAT&quot;: 470.69018485,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 105,
        &quot;reference&quot;: &quot;libero&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 86,
        &quot;amountET&quot;: 505.43914838,
        &quot;amountVAT&quot;: 309420.43,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 106,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 9,
        &quot;amountET&quot;: 4.1757,
        &quot;amountVAT&quot;: 57075749.25,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 107,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 46,
        &quot;amountET&quot;: 1.401528763,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 108,
        &quot;reference&quot;: &quot;natus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 45,
        &quot;amountET&quot;: 6341.1303,
        &quot;amountVAT&quot;: 4.29771,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 109,
        &quot;reference&quot;: &quot;explicabo&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 43,
        &quot;amountET&quot;: 3881474.80673,
        &quot;amountVAT&quot;: 61032.8030964,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 110,
        &quot;reference&quot;: &quot;quasi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 41,
        &quot;amountET&quot;: 6289980.157499,
        &quot;amountVAT&quot;: 87793.75088,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 111,
        &quot;reference&quot;: &quot;corrupti&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 59,
        &quot;amountET&quot;: 83.559267401,
        &quot;amountVAT&quot;: 74086787.5181,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 112,
        &quot;reference&quot;: &quot;debitis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 30,
        &quot;amountET&quot;: 26674.05,
        &quot;amountVAT&quot;: 44.442348,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 113,
        &quot;reference&quot;: &quot;molestiae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 3,
        &quot;amountET&quot;: 31640389.852306,
        &quot;amountVAT&quot;: 172.48,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 114,
        &quot;reference&quot;: &quot;voluptatem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 3,
        &quot;amountET&quot;: 24.537939,
        &quot;amountVAT&quot;: 38.86474916,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 115,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 418.371766,
        &quot;amountVAT&quot;: 3.62235256,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 116,
        &quot;reference&quot;: &quot;repudiandae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 33,
        &quot;amountET&quot;: 39682822.27376,
        &quot;amountVAT&quot;: 51143.198247,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 117,
        &quot;reference&quot;: &quot;suscipit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 91,
        &quot;amountET&quot;: 4.11905852,
        &quot;amountVAT&quot;: 563537.16160647,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 118,
        &quot;reference&quot;: &quot;porro&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 28,
        &quot;amountET&quot;: 6692.11205,
        &quot;amountVAT&quot;: 80648.114116959,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 119,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 27.99821187,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 120,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 84,
        &quot;amountET&quot;: 17.36151995,
        &quot;amountVAT&quot;: 2.561194584,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 121,
        &quot;reference&quot;: &quot;error&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 93,
        &quot;amountET&quot;: 32697.181060714,
        &quot;amountVAT&quot;: 274.93095,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 122,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 30,
        &quot;amountET&quot;: 708.855667,
        &quot;amountVAT&quot;: 29014,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 123,
        &quot;reference&quot;: &quot;assumenda&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 10,
        &quot;amountET&quot;: 684167.518252,
        &quot;amountVAT&quot;: 0.092166781,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 124,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 13,
        &quot;amountET&quot;: 7114008,
        &quot;amountVAT&quot;: 4564666.7713019,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 125,
        &quot;reference&quot;: &quot;iste&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 64,
        &quot;amountET&quot;: 1413165.925,
        &quot;amountVAT&quot;: 16174.28,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 126,
        &quot;reference&quot;: &quot;aut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 207.6672,
        &quot;amountVAT&quot;: 8240.659404,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 127,
        &quot;reference&quot;: &quot;deleniti&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 14,
        &quot;amountET&quot;: 10885246,
        &quot;amountVAT&quot;: 643776948.34482,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 128,
        &quot;reference&quot;: &quot;beatae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 2,
        &quot;amountET&quot;: 197518.41606668,
        &quot;amountVAT&quot;: 1.0818,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 129,
        &quot;reference&quot;: &quot;reiciendis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 10,
        &quot;amountET&quot;: 53.153630395,
        &quot;amountVAT&quot;: 2205278.981,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 130,
        &quot;reference&quot;: &quot;est&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 22,
        &quot;amountET&quot;: 28266.089,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 131,
        &quot;reference&quot;: &quot;voluptas&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 55,
        &quot;amountET&quot;: 74.930828,
        &quot;amountVAT&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 132,
        &quot;reference&quot;: &quot;quos&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 56,
        &quot;amountET&quot;: 76,
        &quot;amountVAT&quot;: 0.98074,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 133,
        &quot;reference&quot;: &quot;esse&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 69,
        &quot;amountET&quot;: 81554.757,
        &quot;amountVAT&quot;: 1.9792,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 134,
        &quot;reference&quot;: &quot;dolores&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 3265639.8183042,
        &quot;amountVAT&quot;: 4.1494556,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 135,
        &quot;reference&quot;: &quot;adipisci&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 60,
        &quot;amountET&quot;: 5227843.0609103,
        &quot;amountVAT&quot;: 468.57,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 136,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 49,
        &quot;amountET&quot;: 313101818.90774,
        &quot;amountVAT&quot;: 44.28664,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 137,
        &quot;reference&quot;: &quot;aut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 10,
        &quot;amountET&quot;: 438060.8,
        &quot;amountVAT&quot;: 2.2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 138,
        &quot;reference&quot;: &quot;vero&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 20,
        &quot;amountET&quot;: 272.455,
        &quot;amountVAT&quot;: 131693.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 139,
        &quot;reference&quot;: &quot;esse&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 8,
        &quot;amountET&quot;: 15087622.4,
        &quot;amountVAT&quot;: 262.2456,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 140,
        &quot;reference&quot;: &quot;temporibus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 242736.33342174,
        &quot;amountVAT&quot;: 1.471968524,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 141,
        &quot;reference&quot;: &quot;neque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 54979.953139,
        &quot;amountVAT&quot;: 8530979.54756,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 142,
        &quot;reference&quot;: &quot;sit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 72,
        &quot;amountET&quot;: 42920572.61,
        &quot;amountVAT&quot;: 54782392.256994,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 143,
        &quot;reference&quot;: &quot;eius&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 59,
        &quot;amountET&quot;: 0.3946648,
        &quot;amountVAT&quot;: 111,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 144,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 54,
        &quot;amountET&quot;: 23867.7653559,
        &quot;amountVAT&quot;: 586.634,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 145,
        &quot;reference&quot;: &quot;dolores&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 62,
        &quot;amountET&quot;: 28070626.718,
        &quot;amountVAT&quot;: 7144818.87647,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 146,
        &quot;reference&quot;: &quot;est&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 4545799.9,
        &quot;amountVAT&quot;: 9992.8832,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 147,
        &quot;reference&quot;: &quot;porro&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 100,
        &quot;amountET&quot;: 36502009.053,
        &quot;amountVAT&quot;: 1384634.626553,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 148,
        &quot;reference&quot;: &quot;voluptatem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 83,
        &quot;amountET&quot;: 5228.13,
        &quot;amountVAT&quot;: 6.385643746,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 149,
        &quot;reference&quot;: &quot;atque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 4,
        &quot;amountET&quot;: 875004.6764,
        &quot;amountVAT&quot;: 31433.92590055,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 150,
        &quot;reference&quot;: &quot;vel&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 78,
        &quot;amountET&quot;: 1511.5702873,
        &quot;amountVAT&quot;: 27818224.384368,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 151,
        &quot;reference&quot;: &quot;sit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 60,
        &quot;amountET&quot;: 75817.48487209,
        &quot;amountVAT&quot;: 54.9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 152,
        &quot;reference&quot;: &quot;similique&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 93,
        &quot;amountET&quot;: 2759.853546527,
        &quot;amountVAT&quot;: 558,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 153,
        &quot;reference&quot;: &quot;tenetur&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 6,
        &quot;amountET&quot;: 3680123.9931924,
        &quot;amountVAT&quot;: 1025.6138,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 154,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 98,
        &quot;amountET&quot;: 0,
        &quot;amountVAT&quot;: 5162203.33,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 155,
        &quot;reference&quot;: &quot;vero&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 49,
        &quot;amountET&quot;: 2.048,
        &quot;amountVAT&quot;: 200903.67018663,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 156,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 7,
        &quot;amountET&quot;: 101652.586,
        &quot;amountVAT&quot;: 11845,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 157,
        &quot;reference&quot;: &quot;doloremque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 13,
        &quot;amountET&quot;: 39868674,
        &quot;amountVAT&quot;: 18.2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 158,
        &quot;reference&quot;: &quot;fugiat&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 71,
        &quot;amountET&quot;: 630576333.279,
        &quot;amountVAT&quot;: 3179.82,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 159,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 94,
        &quot;amountET&quot;: 2707246.559149,
        &quot;amountVAT&quot;: 1919,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 160,
        &quot;reference&quot;: &quot;tempora&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 73,
        &quot;amountET&quot;: 105019.43944135,
        &quot;amountVAT&quot;: 6722403.972483,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 161,
        &quot;reference&quot;: &quot;eaque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 89,
        &quot;amountET&quot;: 3015.84,
        &quot;amountVAT&quot;: 37707.8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 162,
        &quot;reference&quot;: &quot;ipsum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 13,
        &quot;amountET&quot;: 475954.6,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 163,
        &quot;reference&quot;: &quot;itaque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 47,
        &quot;amountET&quot;: 44.4,
        &quot;amountVAT&quot;: 47.5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 164,
        &quot;reference&quot;: &quot;aliquam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 21200.098672302,
        &quot;amountVAT&quot;: 7661593.2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 165,
        &quot;reference&quot;: &quot;alias&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 71,
        &quot;amountET&quot;: 7595,
        &quot;amountVAT&quot;: 7499.32141861,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 166,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 58,
        &quot;amountET&quot;: 2413.925813,
        &quot;amountVAT&quot;: 62567.8156,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 167,
        &quot;reference&quot;: &quot;eum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 47,
        &quot;amountET&quot;: 381233578.0743,
        &quot;amountVAT&quot;: 3008.816781659,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 168,
        &quot;reference&quot;: &quot;molestiae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 14,
        &quot;amountET&quot;: 260139036.84443,
        &quot;amountVAT&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 169,
        &quot;reference&quot;: &quot;temporibus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 58,
        &quot;amountET&quot;: 321894899.742,
        &quot;amountVAT&quot;: 1239734.8179743,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 170,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 4.419448,
        &quot;amountVAT&quot;: 76543.378834994,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 171,
        &quot;reference&quot;: &quot;quisquam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 34,
        &quot;amountET&quot;: 12244110.677,
        &quot;amountVAT&quot;: 83.68678,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 172,
        &quot;reference&quot;: &quot;rem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 65,
        &quot;amountET&quot;: 20093.242420069,
        &quot;amountVAT&quot;: 11436.74028457,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 173,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 56,
        &quot;amountET&quot;: 70617.3,
        &quot;amountVAT&quot;: 5807052.049,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 174,
        &quot;reference&quot;: &quot;accusantium&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 63,
        &quot;amountET&quot;: 38.52,
        &quot;amountVAT&quot;: 409724.65,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 175,
        &quot;reference&quot;: &quot;quo&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 67,
        &quot;amountET&quot;: 230.54674223,
        &quot;amountVAT&quot;: 1062389.8889586,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 176,
        &quot;reference&quot;: &quot;reiciendis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 85,
        &quot;amountET&quot;: 2724558.521,
        &quot;amountVAT&quot;: 0.07135,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 177,
        &quot;reference&quot;: &quot;nihil&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 74,
        &quot;amountET&quot;: 498684.0975517,
        &quot;amountVAT&quot;: 5596.7,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 178,
        &quot;reference&quot;: &quot;sit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 30,
        &quot;amountET&quot;: 73045.36934732,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 179,
        &quot;reference&quot;: &quot;voluptatum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 46,
        &quot;amountET&quot;: 321007.660121,
        &quot;amountVAT&quot;: 167.9239,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 180,
        &quot;reference&quot;: &quot;ad&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 84,
        &quot;amountET&quot;: 19340760.2667,
        &quot;amountVAT&quot;: 286976.473,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 181,
        &quot;reference&quot;: &quot;enim&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 62,
        &quot;amountET&quot;: 75933853.283023,
        &quot;amountVAT&quot;: 640026266.46286,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 182,
        &quot;reference&quot;: &quot;atque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 46,
        &quot;amountET&quot;: 0.12,
        &quot;amountVAT&quot;: 2765.0223,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 183,
        &quot;reference&quot;: &quot;temporibus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 34,
        &quot;amountET&quot;: 4805741.7,
        &quot;amountVAT&quot;: 5757.18167,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 184,
        &quot;reference&quot;: &quot;est&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 24,
        &quot;amountET&quot;: 608739.37178723,
        &quot;amountVAT&quot;: 6926.7514,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 185,
        &quot;reference&quot;: &quot;quae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 354.9893282,
        &quot;amountVAT&quot;: 1614.6,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 186,
        &quot;reference&quot;: &quot;officia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 69,
        &quot;amountET&quot;: 516.1622364,
        &quot;amountVAT&quot;: 412428.94351456,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 187,
        &quot;reference&quot;: &quot;laudantium&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 80,
        &quot;amountET&quot;: 1164153.46,
        &quot;amountVAT&quot;: 3177050.14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 188,
        &quot;reference&quot;: &quot;non&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 3046035.99,
        &quot;amountVAT&quot;: 8470899.3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 189,
        &quot;reference&quot;: &quot;vel&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 85,
        &quot;amountET&quot;: 1.54695537,
        &quot;amountVAT&quot;: 704449.6251,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 190,
        &quot;reference&quot;: &quot;itaque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 98,
        &quot;amountET&quot;: 73300041.3237,
        &quot;amountVAT&quot;: 955.15,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 191,
        &quot;reference&quot;: &quot;voluptatibus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 83,
        &quot;amountET&quot;: 27077879.555,
        &quot;amountVAT&quot;: 28465.34705192,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 192,
        &quot;reference&quot;: &quot;eaque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 55,
        &quot;amountET&quot;: 124.53357968,
        &quot;amountVAT&quot;: 4764.2718511,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 193,
        &quot;reference&quot;: &quot;sapiente&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 55,
        &quot;amountET&quot;: 2856.61862,
        &quot;amountVAT&quot;: 422.93,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 194,
        &quot;reference&quot;: &quot;ipsam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 46.6556252,
        &quot;amountVAT&quot;: 4821.195190097,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 195,
        &quot;reference&quot;: &quot;magni&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 94,
        &quot;amountET&quot;: 141.08731634,
        &quot;amountVAT&quot;: 4641.593,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 196,
        &quot;reference&quot;: &quot;magnam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 57,
        &quot;amountET&quot;: 18978069.537356,
        &quot;amountVAT&quot;: 5075.4920243,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 197,
        &quot;reference&quot;: &quot;ratione&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 94,
        &quot;amountET&quot;: 3.303826,
        &quot;amountVAT&quot;: 20236.820338558,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 198,
        &quot;reference&quot;: &quot;animi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 46,
        &quot;amountET&quot;: 779040079.78393,
        &quot;amountVAT&quot;: 843.9762,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 199,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 3,
        &quot;amountET&quot;: 590.58393514,
        &quot;amountVAT&quot;: 1.932346334,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 200,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 57,
        &quot;amountET&quot;: 1.18228,
        &quot;amountVAT&quot;: 62.97834,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 201,
        &quot;reference&quot;: &quot;in&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 9,
        &quot;amountET&quot;: 3345,
        &quot;amountVAT&quot;: 5533617.4756165,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 202,
        &quot;reference&quot;: &quot;sapiente&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 1,
        &quot;amountET&quot;: 4356722.3174,
        &quot;amountVAT&quot;: 1303106.763998,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 203,
        &quot;reference&quot;: &quot;suscipit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 3,
        &quot;amountET&quot;: 799481.8196208,
        &quot;amountVAT&quot;: 178.7079,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 204,
        &quot;reference&quot;: &quot;minus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 51,
        &quot;amountET&quot;: 2.7194,
        &quot;amountVAT&quot;: 97250665.540859,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 205,
        &quot;reference&quot;: &quot;nam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 11,
        &quot;amountET&quot;: 0.777635,
        &quot;amountVAT&quot;: 2116780.89142,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 206,
        &quot;reference&quot;: &quot;suscipit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 21,
        &quot;amountET&quot;: 120.67761,
        &quot;amountVAT&quot;: 491.5068,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 207,
        &quot;reference&quot;: &quot;labore&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 39,
        &quot;amountET&quot;: 1795.3952,
        &quot;amountVAT&quot;: 46136107.792477,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 208,
        &quot;reference&quot;: &quot;molestiae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 78,
        &quot;amountET&quot;: 46.362256135,
        &quot;amountVAT&quot;: 1491532.729466,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 209,
        &quot;reference&quot;: &quot;iusto&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 267494058.15,
        &quot;amountVAT&quot;: 298569.58,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 210,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 96,
        &quot;amountET&quot;: 14,
        &quot;amountVAT&quot;: 6423,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 211,
        &quot;reference&quot;: &quot;voluptate&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 7,
        &quot;amountET&quot;: 185509.15263405,
        &quot;amountVAT&quot;: 273229.4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 212,
        &quot;reference&quot;: &quot;aspernatur&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 50,
        &quot;amountET&quot;: 1246.42383,
        &quot;amountVAT&quot;: 2902814.45,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 213,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 33,
        &quot;amountET&quot;: 441.3121,
        &quot;amountVAT&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 214,
        &quot;reference&quot;: &quot;molestias&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 55,
        &quot;amountET&quot;: 19.93574934,
        &quot;amountVAT&quot;: 333059622.8495,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 215,
        &quot;reference&quot;: &quot;officiis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 839.567909,
        &quot;amountVAT&quot;: 17822493.882,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 216,
        &quot;reference&quot;: &quot;inventore&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 54,
        &quot;amountET&quot;: 313882.124154,
        &quot;amountVAT&quot;: 11812.51118,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 217,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 68,
        &quot;amountET&quot;: 360.14017607,
        &quot;amountVAT&quot;: 212912.4327624,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 218,
        &quot;reference&quot;: &quot;nobis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 61,
        &quot;amountET&quot;: 217.075,
        &quot;amountVAT&quot;: 2933269,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 219,
        &quot;reference&quot;: &quot;sed&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 24,
        &quot;amountET&quot;: 307083168.3,
        &quot;amountVAT&quot;: 1226.07,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 220,
        &quot;reference&quot;: &quot;voluptatum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 55,
        &quot;amountET&quot;: 4427102.3176,
        &quot;amountVAT&quot;: 8.031767766,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 221,
        &quot;reference&quot;: &quot;dolorem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 63,
        &quot;amountET&quot;: 12654093.561,
        &quot;amountVAT&quot;: 9037.494146,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 222,
        &quot;reference&quot;: &quot;asperiores&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 45,
        &quot;amountET&quot;: 46762.2658831,
        &quot;amountVAT&quot;: 174918,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 223,
        &quot;reference&quot;: &quot;molestiae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 158.20729,
        &quot;amountVAT&quot;: 81764.844988213,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 224,
        &quot;reference&quot;: &quot;minima&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 69,
        &quot;amountET&quot;: 3.057,
        &quot;amountVAT&quot;: 85.61516446,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 225,
        &quot;reference&quot;: &quot;iure&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 11,
        &quot;amountET&quot;: 1.7,
        &quot;amountVAT&quot;: 564269.6977,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 226,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 64,
        &quot;amountET&quot;: 676264618.09,
        &quot;amountVAT&quot;: 1777.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 227,
        &quot;reference&quot;: &quot;nihil&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 25,
        &quot;amountET&quot;: 1905713.5,
        &quot;amountVAT&quot;: 4843715.1193338,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 228,
        &quot;reference&quot;: &quot;fugiat&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 41,
        &quot;amountET&quot;: 86560368.471,
        &quot;amountVAT&quot;: 31.0885846,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 229,
        &quot;reference&quot;: &quot;sequi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 19,
        &quot;amountET&quot;: 2440263.1467472,
        &quot;amountVAT&quot;: 26.56,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 230,
        &quot;reference&quot;: &quot;aut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 93,
        &quot;amountET&quot;: 132979.1,
        &quot;amountVAT&quot;: 261805.6207,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 231,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 2,
        &quot;amountET&quot;: 13185.063262849,
        &quot;amountVAT&quot;: 3028.307,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 232,
        &quot;reference&quot;: &quot;quo&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 61,
        &quot;amountET&quot;: 27391759.7191,
        &quot;amountVAT&quot;: 1269695,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 233,
        &quot;reference&quot;: &quot;incidunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 10,
        &quot;amountET&quot;: 45423637,
        &quot;amountVAT&quot;: 6822340.8986,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 234,
        &quot;reference&quot;: &quot;sint&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 81,
        &quot;amountET&quot;: 358702.6696778,
        &quot;amountVAT&quot;: 10.935103,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 235,
        &quot;reference&quot;: &quot;quod&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 11,
        &quot;amountET&quot;: 207015683.9,
        &quot;amountVAT&quot;: 4.00373188,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 236,
        &quot;reference&quot;: &quot;sunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 12,
        &quot;amountET&quot;: 38.612385979,
        &quot;amountVAT&quot;: 3908.67,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 237,
        &quot;reference&quot;: &quot;illum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 48,
        &quot;amountET&quot;: 65889828.4,
        &quot;amountVAT&quot;: 34.4280675,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 238,
        &quot;reference&quot;: &quot;cumque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 90,
        &quot;amountET&quot;: 1731992.9589313,
        &quot;amountVAT&quot;: 4.54255,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 239,
        &quot;reference&quot;: &quot;unde&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 752014687.571,
        &quot;amountVAT&quot;: 3834.12,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 240,
        &quot;reference&quot;: &quot;nobis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 41,
        &quot;amountET&quot;: 5784154.854456,
        &quot;amountVAT&quot;: 6563.03,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 241,
        &quot;reference&quot;: &quot;nam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 109788914.9,
        &quot;amountVAT&quot;: 4929.02076,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 242,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 34,
        &quot;amountET&quot;: 4.175576,
        &quot;amountVAT&quot;: 60.9843,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 243,
        &quot;reference&quot;: &quot;accusamus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 2514751.0112114,
        &quot;amountVAT&quot;: 15563158.020903,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 244,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 99,
        &quot;amountET&quot;: 29238528.157,
        &quot;amountVAT&quot;: 259213.8336074,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 245,
        &quot;reference&quot;: &quot;cupiditate&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 1,
        &quot;amountET&quot;: 0,
        &quot;amountVAT&quot;: 830089.64887908,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 246,
        &quot;reference&quot;: &quot;tempore&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 8,
        &quot;amountET&quot;: 5.007478524,
        &quot;amountVAT&quot;: 158.87433,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 247,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 8,
        &quot;amountET&quot;: 3175593.1826661,
        &quot;amountVAT&quot;: 262702200.92469,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 248,
        &quot;reference&quot;: &quot;deleniti&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 31,
        &quot;amountET&quot;: 1.64785,
        &quot;amountVAT&quot;: 544343.188,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 249,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 50,
        &quot;amountET&quot;: 47.13,
        &quot;amountVAT&quot;: 418,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 250,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 74,
        &quot;amountET&quot;: 601776.3,
        &quot;amountVAT&quot;: 7.2878303,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 251,
        &quot;reference&quot;: &quot;veniam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 95,
        &quot;amountET&quot;: 5.92699,
        &quot;amountVAT&quot;: 4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 252,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 57,
        &quot;amountET&quot;: 43887.58,
        &quot;amountVAT&quot;: 8.14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 253,
        &quot;reference&quot;: &quot;laborum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 31,
        &quot;amountET&quot;: 11.250655773,
        &quot;amountVAT&quot;: 422.1201,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 254,
        &quot;reference&quot;: &quot;illum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 46,
        &quot;amountET&quot;: 72671.900728755,
        &quot;amountVAT&quot;: 0.288,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 255,
        &quot;reference&quot;: &quot;harum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 4,
        &quot;amountET&quot;: 30560.20641,
        &quot;amountVAT&quot;: 1179,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 256,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 44092.02056118,
        &quot;amountVAT&quot;: 5469.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 257,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 56,
        &quot;amountET&quot;: 758.562149,
        &quot;amountVAT&quot;: 2.6688883,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 258,
        &quot;reference&quot;: &quot;eum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 13032411.342,
        &quot;amountVAT&quot;: 13.7585727,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 259,
        &quot;reference&quot;: &quot;reiciendis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 77,
        &quot;amountET&quot;: 2514.6677502,
        &quot;amountVAT&quot;: 7,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 260,
        &quot;reference&quot;: &quot;sit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 39,
        &quot;amountET&quot;: 18247644.978552,
        &quot;amountVAT&quot;: 21346295.2367,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 261,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 33,
        &quot;amountET&quot;: 15.095018,
        &quot;amountVAT&quot;: 3943358.90204,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 262,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 68,
        &quot;amountET&quot;: 1.9314,
        &quot;amountVAT&quot;: 397887.29904985,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 263,
        &quot;reference&quot;: &quot;cum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 95,
        &quot;amountET&quot;: 3477140,
        &quot;amountVAT&quot;: 402635.5194,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 264,
        &quot;reference&quot;: &quot;corrupti&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 4,
        &quot;amountET&quot;: 3.79516,
        &quot;amountVAT&quot;: 53980.84,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 265,
        &quot;reference&quot;: &quot;sunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 20,
        &quot;amountET&quot;: 5241.50402837,
        &quot;amountVAT&quot;: 31369.69,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 266,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 61,
        &quot;amountET&quot;: 533071.36396512,
        &quot;amountVAT&quot;: 3.701261,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 267,
        &quot;reference&quot;: &quot;sunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 45,
        &quot;amountET&quot;: 267.36373,
        &quot;amountVAT&quot;: 61373340.47963,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 268,
        &quot;reference&quot;: &quot;similique&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 66,
        &quot;amountET&quot;: 0.8553,
        &quot;amountVAT&quot;: 1.351784,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 269,
        &quot;reference&quot;: &quot;nihil&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 47,
        &quot;amountET&quot;: 585917726.8,
        &quot;amountVAT&quot;: 1489.247392841,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 270,
        &quot;reference&quot;: &quot;sequi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 659130224.91007,
        &quot;amountVAT&quot;: 7960187.9481,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 271,
        &quot;reference&quot;: &quot;expedita&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 15,
        &quot;amountET&quot;: 0.3952,
        &quot;amountVAT&quot;: 23405.972,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 272,
        &quot;reference&quot;: &quot;totam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 75,
        &quot;amountET&quot;: 769.9384728,
        &quot;amountVAT&quot;: 45574750.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 273,
        &quot;reference&quot;: &quot;mollitia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 56,
        &quot;amountET&quot;: 14.776,
        &quot;amountVAT&quot;: 4299,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 274,
        &quot;reference&quot;: &quot;recusandae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 74,
        &quot;amountET&quot;: 2393615.7,
        &quot;amountVAT&quot;: 4057.057,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 275,
        &quot;reference&quot;: &quot;eum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 27,
        &quot;amountET&quot;: 9876.0302133,
        &quot;amountVAT&quot;: 2.7433,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 276,
        &quot;reference&quot;: &quot;repellendus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 39,
        &quot;amountET&quot;: 28.915495147,
        &quot;amountVAT&quot;: 25.0932629,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 277,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 100,
        &quot;amountET&quot;: 5.7981,
        &quot;amountVAT&quot;: 1905868.74904,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 278,
        &quot;reference&quot;: &quot;vero&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 78,
        &quot;amountET&quot;: 2076.36430968,
        &quot;amountVAT&quot;: 319790190.1957,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 279,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 20,
        &quot;amountET&quot;: 235708788.87147,
        &quot;amountVAT&quot;: 353390.17896,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 280,
        &quot;reference&quot;: &quot;veniam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 78,
        &quot;amountET&quot;: 1060027.45494,
        &quot;amountVAT&quot;: 4.9366,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 281,
        &quot;reference&quot;: &quot;ea&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 1.2,
        &quot;amountVAT&quot;: 123562.963,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 282,
        &quot;reference&quot;: &quot;quisquam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 18.5581,
        &quot;amountVAT&quot;: 30874390.994414,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 283,
        &quot;reference&quot;: &quot;repellendus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 19,
        &quot;amountET&quot;: 72150114.5677,
        &quot;amountVAT&quot;: 83563,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 284,
        &quot;reference&quot;: &quot;placeat&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 2,
        &quot;amountET&quot;: 20.7,
        &quot;amountVAT&quot;: 5.71987,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 285,
        &quot;reference&quot;: &quot;beatae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 12,
        &quot;amountET&quot;: 680,
        &quot;amountVAT&quot;: 15.49177,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 286,
        &quot;reference&quot;: &quot;nesciunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 76,
        &quot;amountET&quot;: 4567253.0675515,
        &quot;amountVAT&quot;: 41976768.546085,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 287,
        &quot;reference&quot;: &quot;optio&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 97,
        &quot;amountET&quot;: 11.7280585,
        &quot;amountVAT&quot;: 260473.75768171,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 288,
        &quot;reference&quot;: &quot;porro&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 51,
        &quot;amountET&quot;: 259733700.8186,
        &quot;amountVAT&quot;: 44,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 289,
        &quot;reference&quot;: &quot;rem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 61,
        &quot;amountET&quot;: 58030.198,
        &quot;amountVAT&quot;: 4986.166,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 290,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 19,
        &quot;amountET&quot;: 25538.4972216,
        &quot;amountVAT&quot;: 49,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 291,
        &quot;reference&quot;: &quot;tempora&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 72,
        &quot;amountET&quot;: 2076.15822,
        &quot;amountVAT&quot;: 42624.4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 292,
        &quot;reference&quot;: &quot;amet&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 28,
        &quot;amountET&quot;: 644426.555689,
        &quot;amountVAT&quot;: 42891501.80205,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 293,
        &quot;reference&quot;: &quot;cumque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 20,
        &quot;amountET&quot;: 6.06,
        &quot;amountVAT&quot;: 638542471.84847,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 294,
        &quot;reference&quot;: &quot;natus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 1836494.471,
        &quot;amountVAT&quot;: 625.09801,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 295,
        &quot;reference&quot;: &quot;occaecati&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 98,
        &quot;amountET&quot;: 1.254,
        &quot;amountVAT&quot;: 20.9197,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 296,
        &quot;reference&quot;: &quot;recusandae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 6,
        &quot;amountET&quot;: 1198.518611,
        &quot;amountVAT&quot;: 565376850,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 297,
        &quot;reference&quot;: &quot;dignissimos&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 56,
        &quot;amountET&quot;: 36889991.494959,
        &quot;amountVAT&quot;: 55861843.2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 298,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 65,
        &quot;amountET&quot;: 442.0645,
        &quot;amountVAT&quot;: 1016.404225801,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 299,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 28,
        &quot;amountET&quot;: 43.0004,
        &quot;amountVAT&quot;: 2491.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 300,
        &quot;reference&quot;: &quot;debitis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 59,
        &quot;amountET&quot;: 5.47692,
        &quot;amountVAT&quot;: 858677154.59,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-orders" data-method="GET"
      data-path="api/v1/orders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-orders"
                    onclick="tryItOut('GETapi-v1-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-orders"
                    onclick="cancelTryOut('GETapi-v1-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-orders-create">Show the form for creating a new resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-orders-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/orders/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/orders/create"
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

<span id="example-responses-GETapi-v1-orders-create">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-orders-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-orders-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-orders-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-orders-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-orders-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-orders-create" data-method="GET"
      data-path="api/v1/orders/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-orders-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-orders-create"
                    onclick="tryItOut('GETapi-v1-orders-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-orders-create"
                    onclick="cancelTryOut('GETapi-v1-orders-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-orders-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/orders/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-orders-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-orders-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-orders">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://ali-api.test/api/v1/orders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/orders"
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

<span id="example-responses-POSTapi-v1-orders">
</span>
<span id="execution-results-POSTapi-v1-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-orders" data-method="POST"
      data-path="api/v1/orders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-orders"
                    onclick="tryItOut('POSTapi-v1-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-orders"
                    onclick="cancelTryOut('POSTapi-v1-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-orders--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/orders/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/orders/1"
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

<span id="example-responses-GETapi-v1-orders--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-orders--id-" data-method="GET"
      data-path="api/v1/orders/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-orders--id-"
                    onclick="tryItOut('GETapi-v1-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-orders--id-"
                    onclick="cancelTryOut('GETapi-v1-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-orders--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-orders--order--edit">Show the form for editing the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-orders--order--edit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/orders/1/edit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/orders/1/edit"
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

<span id="example-responses-GETapi-v1-orders--order--edit">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-orders--order--edit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-orders--order--edit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-orders--order--edit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-orders--order--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-orders--order--edit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-orders--order--edit" data-method="GET"
      data-path="api/v1/orders/{order}/edit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-orders--order--edit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-orders--order--edit"
                    onclick="tryItOut('GETapi-v1-orders--order--edit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-orders--order--edit"
                    onclick="cancelTryOut('GETapi-v1-orders--order--edit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-orders--order--edit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/orders/{order}/edit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-orders--order--edit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-orders--order--edit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order"                data-endpoint="GETapi-v1-orders--order--edit"
               value="1"
               data-component="url">
    <br>
<p>The order. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-orders--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://ali-api.test/api/v1/orders/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/orders/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-orders--id-">
</span>
<span id="execution-results-PUTapi-v1-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-orders--id-" data-method="PUT"
      data-path="api/v1/orders/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-orders--id-"
                    onclick="tryItOut('PUTapi-v1-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-orders--id-"
                    onclick="cancelTryOut('PUTapi-v1-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/orders/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-orders--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-orders--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://ali-api.test/api/v1/orders/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/orders/1"
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

<span id="example-responses-DELETEapi-v1-orders--id-">
</span>
<span id="execution-results-DELETEapi-v1-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-orders--id-" data-method="DELETE"
      data-path="api/v1/orders/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-orders--id-"
                    onclick="tryItOut('DELETEapi-v1-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-orders--id-"
                    onclick="cancelTryOut('DELETEapi-v1-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-orders--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-debug-customers">GET api/v1/debug/customers</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-debug-customers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/debug/customers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/customers"
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

<span id="example-responses-GETapi-v1-debug-customers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Simone-Adrienne Salmon&quot;,
        &quot;address&quot;: &quot;17, place de Leroux\n92561 Rouxboeuf&quot;,
        &quot;postalCode&quot;: &quot;93328&quot;,
        &quot;city&quot;: &quot;Briandboeuf&quot;,
        &quot;email&quot;: &quot;adele21@example.org&quot;,
        &quot;url&quot;: &quot;http://bonnin.fr/&quot;,
        &quot;user_id&quot;: 14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Thierry Colin&quot;,
        &quot;address&quot;: &quot;11, rue Alex Valentin\n50981 Alves&quot;,
        &quot;postalCode&quot;: &quot;28573&quot;,
        &quot;city&quot;: &quot;Normand&quot;,
        &quot;email&quot;: &quot;nicolas58@example.net&quot;,
        &quot;url&quot;: &quot;http://gaudin.fr/libero-ratione-vel-ut-placeat-velit.html&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Bernard Guyon&quot;,
        &quot;address&quot;: &quot;27, rue de Faivre\n42111 Marion-la-For&ecirc;t&quot;,
        &quot;postalCode&quot;: &quot;12336&quot;,
        &quot;city&quot;: &quot;Brun&quot;,
        &quot;email&quot;: &quot;qpichon@example.org&quot;,
        &quot;url&quot;: &quot;https://www.clement.net/veniam-rerum-voluptatibus-rem-optio-eos-rerum&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Thomas Paris&quot;,
        &quot;address&quot;: &quot;38, rue Le Goff\n63004 Durand&quot;,
        &quot;postalCode&quot;: &quot;47567&quot;,
        &quot;city&quot;: &quot;Huet&quot;,
        &quot;email&quot;: &quot;dufour.frederic@example.net&quot;,
        &quot;url&quot;: &quot;http://www.vincent.fr/labore-omnis-officia-aut-excepturi-voluptas&quot;,
        &quot;user_id&quot;: 16,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Beno&icirc;t Cordier-Munoz&quot;,
        &quot;address&quot;: &quot;6, impasse Julien Valentin\n79128 Le Goff&quot;,
        &quot;postalCode&quot;: &quot;98369&quot;,
        &quot;city&quot;: &quot;Gautierboeuf&quot;,
        &quot;email&quot;: &quot;lreynaud@example.com&quot;,
        &quot;url&quot;: &quot;https://www.guillon.net/quasi-et-quia-itaque-aut-illo-laudantium-similique&quot;,
        &quot;user_id&quot;: 28,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Nicolas Fischer-Rodriguez&quot;,
        &quot;address&quot;: &quot;4, boulevard de Bertin\n65340 Peronboeuf&quot;,
        &quot;postalCode&quot;: &quot;92330&quot;,
        &quot;city&quot;: &quot;Blondel&quot;,
        &quot;email&quot;: &quot;denis.valette@example.org&quot;,
        &quot;url&quot;: &quot;http://www.perrier.fr/reprehenderit-quia-non-libero-officia-quia&quot;,
        &quot;user_id&quot;: 20,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Honor&eacute; Bodin&quot;,
        &quot;address&quot;: &quot;69, rue de Marin\n54132 Durand&quot;,
        &quot;postalCode&quot;: &quot;96549&quot;,
        &quot;city&quot;: &quot;Benoit&quot;,
        &quot;email&quot;: &quot;noel98@example.net&quot;,
        &quot;url&quot;: &quot;http://nguyen.fr/ipsam-dolor-id-optio-aut-dolorem.html&quot;,
        &quot;user_id&quot;: 4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Jacques Noel&quot;,
        &quot;address&quot;: &quot;27, impasse Cousin\n71299 Ferreira&quot;,
        &quot;postalCode&quot;: &quot;03101&quot;,
        &quot;city&quot;: &quot;Millet-les-Bains&quot;,
        &quot;email&quot;: &quot;moreno.pierre@example.net&quot;,
        &quot;url&quot;: &quot;http://leclercq.com/voluptates-enim-quibusdam-ullam-eum-ex&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Isabelle-Martine Martel&quot;,
        &quot;address&quot;: &quot;75, impasse Guillaume Moulin\n97111 NeveuVille&quot;,
        &quot;postalCode&quot;: &quot;87050&quot;,
        &quot;city&quot;: &quot;Lemonnier&quot;,
        &quot;email&quot;: &quot;yramos@example.com&quot;,
        &quot;url&quot;: &quot;http://gosselin.com/aut-exercitationem-est-eos-officiis-et.html&quot;,
        &quot;user_id&quot;: 24,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Manon Potier&quot;,
        &quot;address&quot;: &quot;45, place Bertin\n68233 GuillouVille&quot;,
        &quot;postalCode&quot;: &quot;48473&quot;,
        &quot;city&quot;: &quot;Diallo&quot;,
        &quot;email&quot;: &quot;alfred24@example.org&quot;,
        &quot;url&quot;: &quot;http://jourdan.fr/sunt-sit-fuga-quia-error-voluptas-consectetur-et&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Fran&ccedil;oise-Bernadette Paul&quot;,
        &quot;address&quot;: &quot;chemin Maryse Mahe\n51420 Guibert&quot;,
        &quot;postalCode&quot;: &quot;67441&quot;,
        &quot;city&quot;: &quot;Laine&quot;,
        &quot;email&quot;: &quot;capucine73@example.com&quot;,
        &quot;url&quot;: &quot;http://benard.fr/possimus-quam-vitae-placeat-autem&quot;,
        &quot;user_id&quot;: 11,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Fran&ccedil;oise Blanchard-Tessier&quot;,
        &quot;address&quot;: &quot;50, chemin Emmanuel Breton\n25795 Barbe&quot;,
        &quot;postalCode&quot;: &quot;04496&quot;,
        &quot;city&quot;: &quot;Maury&quot;,
        &quot;email&quot;: &quot;peron.victor@example.org&quot;,
        &quot;url&quot;: &quot;http://www.barbe.fr/sequi-cum-quidem-explicabo-excepturi-facere-ut-ut-aut.html&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Nathalie de Lamy&quot;,
        &quot;address&quot;: &quot;266, impasse Philippe\n25713 Le Goff&quot;,
        &quot;postalCode&quot;: &quot;81748&quot;,
        &quot;city&quot;: &quot;Bousquet&quot;,
        &quot;email&quot;: &quot;suzanne60@example.org&quot;,
        &quot;url&quot;: &quot;http://diaz.com/dolores-debitis-aut-et-officiis-fugit.html&quot;,
        &quot;user_id&quot;: 4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Bertrand Toussaint&quot;,
        &quot;address&quot;: &quot;6, impasse Leblanc\n25669 Francois&quot;,
        &quot;postalCode&quot;: &quot;50701&quot;,
        &quot;city&quot;: &quot;Richard&quot;,
        &quot;email&quot;: &quot;wdias@example.com&quot;,
        &quot;url&quot;: &quot;http://www.lenoir.fr/in-cumque-facilis-non-possimus&quot;,
        &quot;user_id&quot;: 23,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Robert Hoareau&quot;,
        &quot;address&quot;: &quot;228, rue Isabelle Maillet\n63075 Pons&quot;,
        &quot;postalCode&quot;: &quot;06873&quot;,
        &quot;city&quot;: &quot;Goncalves-sur-Leveque&quot;,
        &quot;email&quot;: &quot;raymond.jacob@example.com&quot;,
        &quot;url&quot;: &quot;http://petit.org/magnam-nisi-ut-ea-non-et&quot;,
        &quot;user_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;name&quot;: &quot;Aurore-Nathalie Boucher&quot;,
        &quot;address&quot;: &quot;73, place Ollivier\n09202 Schmittboeuf&quot;,
        &quot;postalCode&quot;: &quot;53373&quot;,
        &quot;city&quot;: &quot;Normand-les-Bains&quot;,
        &quot;email&quot;: &quot;ines02@example.net&quot;,
        &quot;url&quot;: &quot;http://www.becker.com/&quot;,
        &quot;user_id&quot;: 16,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;name&quot;: &quot;Anouk-Jacqueline Allain&quot;,
        &quot;address&quot;: &quot;1, rue St&eacute;phanie Gillet\n12809 Besson&quot;,
        &quot;postalCode&quot;: &quot;62105&quot;,
        &quot;city&quot;: &quot;Boucher-sur-Royer&quot;,
        &quot;email&quot;: &quot;blin.jerome@example.net&quot;,
        &quot;url&quot;: &quot;http://www.bazin.org/et-sit-qui-ut-possimus-et&quot;,
        &quot;user_id&quot;: 12,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;name&quot;: &quot;Antoinette Camus&quot;,
        &quot;address&quot;: &quot;23, chemin Raymond Guichard\n13860 Boulay&quot;,
        &quot;postalCode&quot;: &quot;11144&quot;,
        &quot;city&quot;: &quot;Rousset&quot;,
        &quot;email&quot;: &quot;thomas.deschamps@example.org&quot;,
        &quot;url&quot;: &quot;http://vincent.org/&quot;,
        &quot;user_id&quot;: 13,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;name&quot;: &quot;Raymond Paris&quot;,
        &quot;address&quot;: &quot;19, place Isabelle Munoz\n19401 Pierre&quot;,
        &quot;postalCode&quot;: &quot;05189&quot;,
        &quot;city&quot;: &quot;MorenoBourg&quot;,
        &quot;email&quot;: &quot;udumas@example.net&quot;,
        &quot;url&quot;: &quot;https://www.guerin.org/dicta-et-hic-rerum-laborum-quia-sapiente-quaerat&quot;,
        &quot;user_id&quot;: 7,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;name&quot;: &quot;Augustin Mary&quot;,
        &quot;address&quot;: &quot;72, avenue Georges Diallo\n99180 Colin&quot;,
        &quot;postalCode&quot;: &quot;19668&quot;,
        &quot;city&quot;: &quot;Legendre-sur-Dias&quot;,
        &quot;email&quot;: &quot;bgaudin@example.com&quot;,
        &quot;url&quot;: &quot;http://www.delannoy.com/enim-molestias-ut-laborum-minima-doloribus-exercitationem.html&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;Alfred Hamon&quot;,
        &quot;address&quot;: &quot;50, chemin Roussel\n31349 Vasseur&quot;,
        &quot;postalCode&quot;: &quot;74130&quot;,
        &quot;city&quot;: &quot;Rochedan&quot;,
        &quot;email&quot;: &quot;valette.zacharie@example.com&quot;,
        &quot;url&quot;: &quot;http://www.lemoine.fr/omnis-ut-sit-illo-pariatur&quot;,
        &quot;user_id&quot;: 13,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;name&quot;: &quot;Andr&eacute;e de Guyot&quot;,
        &quot;address&quot;: &quot;10, avenue Ferreira\n61853 Laine&quot;,
        &quot;postalCode&quot;: &quot;36048&quot;,
        &quot;city&quot;: &quot;Cousin&quot;,
        &quot;email&quot;: &quot;zfoucher@example.org&quot;,
        &quot;url&quot;: &quot;http://www.leveque.com/iure-sunt-omnis-ex-recusandae&quot;,
        &quot;user_id&quot;: 15,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;name&quot;: &quot;Suzanne-Brigitte Camus&quot;,
        &quot;address&quot;: &quot;52, boulevard Zacharie Schmitt\n71815 PaulVille&quot;,
        &quot;postalCode&quot;: &quot;25573&quot;,
        &quot;city&quot;: &quot;Ledoux&quot;,
        &quot;email&quot;: &quot;dcarre@example.net&quot;,
        &quot;url&quot;: &quot;http://barbier.fr/dignissimos-cumque-praesentium-veritatis-non-molestias-aut-voluptatem.html&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;name&quot;: &quot;Colette Dupuis&quot;,
        &quot;address&quot;: &quot;4, place &Eacute;douard Clement\n64693 PonsBourg&quot;,
        &quot;postalCode&quot;: &quot;25154&quot;,
        &quot;city&quot;: &quot;Fernandes&quot;,
        &quot;email&quot;: &quot;mmahe@example.org&quot;,
        &quot;url&quot;: &quot;http://leleu.com/quis-delectus-ipsum-sint-inventore-consequuntur-at.html&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;name&quot;: &quot;Jacques Joubert&quot;,
        &quot;address&quot;: &quot;22, chemin Le Roux\n73806 Martinez&quot;,
        &quot;postalCode&quot;: &quot;68389&quot;,
        &quot;city&quot;: &quot;Renault&quot;,
        &quot;email&quot;: &quot;collin.lucy@example.net&quot;,
        &quot;url&quot;: &quot;http://www.gillet.net/iste-quo-veniam-id&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;name&quot;: &quot;No&eacute;mi Lamy&quot;,
        &quot;address&quot;: &quot;avenue Renard\n49242 Valette&quot;,
        &quot;postalCode&quot;: &quot;52790&quot;,
        &quot;city&quot;: &quot;Becker&quot;,
        &quot;email&quot;: &quot;sebastien65@example.com&quot;,
        &quot;url&quot;: &quot;http://www.boyer.org/quam-vel-quisquam-sit&quot;,
        &quot;user_id&quot;: 25,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;name&quot;: &quot;Julie Cohen&quot;,
        &quot;address&quot;: &quot;4, boulevard Augustin Joly\n28752 Begue&quot;,
        &quot;postalCode&quot;: &quot;63939&quot;,
        &quot;city&quot;: &quot;Rousset&quot;,
        &quot;email&quot;: &quot;gros.clemence@example.org&quot;,
        &quot;url&quot;: &quot;http://www.riviere.com/voluptatem-illo-nostrum-aliquid-quibusdam&quot;,
        &quot;user_id&quot;: 28,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;name&quot;: &quot;&Eacute;l&eacute;onore du Mace&quot;,
        &quot;address&quot;: &quot;36, impasse Paul\n00856 Costadan&quot;,
        &quot;postalCode&quot;: &quot;53063&quot;,
        &quot;city&quot;: &quot;Jacquet&quot;,
        &quot;email&quot;: &quot;arthur.bonnin@example.net&quot;,
        &quot;url&quot;: &quot;http://duval.com/ut-dolorem-at-et-eum-a&quot;,
        &quot;user_id&quot;: 15,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;name&quot;: &quot;Emmanuelle Camus&quot;,
        &quot;address&quot;: &quot;2, avenue Corinne Bailly\n34929 Turpindan&quot;,
        &quot;postalCode&quot;: &quot;03185&quot;,
        &quot;city&quot;: &quot;Foucher&quot;,
        &quot;email&quot;: &quot;martine34@example.com&quot;,
        &quot;url&quot;: &quot;http://tessier.fr/&quot;,
        &quot;user_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;name&quot;: &quot;Victor-G&eacute;rard Garcia&quot;,
        &quot;address&quot;: &quot;596, impasse Zacharie Riou\n00715 Allain&quot;,
        &quot;postalCode&quot;: &quot;83738&quot;,
        &quot;city&quot;: &quot;Cousin&quot;,
        &quot;email&quot;: &quot;vincent76@example.com&quot;,
        &quot;url&quot;: &quot;http://www.bonnin.com/dolor-beatae-facere-perspiciatis-quisquam-recusandae-doloribus-est&quot;,
        &quot;user_id&quot;: 21,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;name&quot;: &quot;Henri Mary&quot;,
        &quot;address&quot;: &quot;74, chemin Allain\n95267 AllardVille&quot;,
        &quot;postalCode&quot;: &quot;21454&quot;,
        &quot;city&quot;: &quot;Dumasnec&quot;,
        &quot;email&quot;: &quot;netienne@example.org&quot;,
        &quot;url&quot;: &quot;https://alexandre.com/qui-aut-labore-itaque-possimus-quos-sit-recusandae.html&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;name&quot;: &quot;Franck Le Germain&quot;,
        &quot;address&quot;: &quot;rue Vincent\n43325 Paris-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;46958&quot;,
        &quot;city&quot;: &quot;Klein&quot;,
        &quot;email&quot;: &quot;timothee20@example.com&quot;,
        &quot;url&quot;: &quot;http://besson.fr/ab-et-molestiae-ratione-harum-sit.html&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;name&quot;: &quot;Christophe Thierry&quot;,
        &quot;address&quot;: &quot;683, avenue de Petit\n94658 Hebert-sur-Perrier&quot;,
        &quot;postalCode&quot;: &quot;34597&quot;,
        &quot;city&quot;: &quot;Aubry&quot;,
        &quot;email&quot;: &quot;maurice.mary@example.net&quot;,
        &quot;url&quot;: &quot;http://perret.com/pariatur-placeat-culpa-sit-nam-ratione-molestiae&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;name&quot;: &quot;Bernard-Emmanuel Herve&quot;,
        &quot;address&quot;: &quot;27, impasse de Ledoux\n89269 Maurice&quot;,
        &quot;postalCode&quot;: &quot;96389&quot;,
        &quot;city&quot;: &quot;Bazin&quot;,
        &quot;email&quot;: &quot;edupuy@example.org&quot;,
        &quot;url&quot;: &quot;http://barbier.net/&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;name&quot;: &quot;&Eacute;mile Guillou-Lemaire&quot;,
        &quot;address&quot;: &quot;41, place Jean\n36282 Lopes&quot;,
        &quot;postalCode&quot;: &quot;19858&quot;,
        &quot;city&quot;: &quot;Grosnec&quot;,
        &quot;email&quot;: &quot;tristan.dupuy@example.com&quot;,
        &quot;url&quot;: &quot;http://www.adam.fr/&quot;,
        &quot;user_id&quot;: 27,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;name&quot;: &quot;No&euml;l Martel&quot;,
        &quot;address&quot;: &quot;33, rue Duhamel\n91754 Charrier&quot;,
        &quot;postalCode&quot;: &quot;06263&quot;,
        &quot;city&quot;: &quot;Lejeune-sur-Brunel&quot;,
        &quot;email&quot;: &quot;iclement@example.net&quot;,
        &quot;url&quot;: &quot;http://www.barthelemy.com/fuga-neque-et-doloribus-magni-reprehenderit&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;name&quot;: &quot;Charles Morin&quot;,
        &quot;address&quot;: &quot;420, rue Augustin Julien\n93034 Martins-sur-Moreau&quot;,
        &quot;postalCode&quot;: &quot;59175&quot;,
        &quot;city&quot;: &quot;PintoVille&quot;,
        &quot;email&quot;: &quot;eleonore59@example.org&quot;,
        &quot;url&quot;: &quot;http://menard.fr/facere-sint-sunt-dolor-aut-modi.html&quot;,
        &quot;user_id&quot;: 10,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;name&quot;: &quot;Fr&eacute;d&eacute;rique-Mathilde Martinez&quot;,
        &quot;address&quot;: &quot;88, impasse de Grondin\n67117 Lebon&quot;,
        &quot;postalCode&quot;: &quot;07665&quot;,
        &quot;city&quot;: &quot;Boucher&quot;,
        &quot;email&quot;: &quot;lefevre.juliette@example.net&quot;,
        &quot;url&quot;: &quot;http://www.leger.org/est-ab-quis-harum-dolorem-rerum-quisquam-rerum&quot;,
        &quot;user_id&quot;: 27,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;name&quot;: &quot;Emmanuel-&Eacute;tienne Toussaint&quot;,
        &quot;address&quot;: &quot;2, impasse Lebreton\n41278 Lefevre&quot;,
        &quot;postalCode&quot;: &quot;99478&quot;,
        &quot;city&quot;: &quot;Colin-sur-Mer&quot;,
        &quot;email&quot;: &quot;renaud.aime@example.org&quot;,
        &quot;url&quot;: &quot;http://gauthier.com/laudantium-earum-doloremque-aut-consectetur-sint&quot;,
        &quot;user_id&quot;: 7,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;name&quot;: &quot;Nathalie-Susanne Leconte&quot;,
        &quot;address&quot;: &quot;28, chemin Hoareau\n19626 Legendre&quot;,
        &quot;postalCode&quot;: &quot;18125&quot;,
        &quot;city&quot;: &quot;Bernier-sur-Ledoux&quot;,
        &quot;email&quot;: &quot;marguerite.dasilva@example.com&quot;,
        &quot;url&quot;: &quot;http://gomez.com/beatae-aut-nihil-et-et-sint-et&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;name&quot;: &quot;Christelle Lefebvre&quot;,
        &quot;address&quot;: &quot;9, rue Sanchez\n48050 Andrenec&quot;,
        &quot;postalCode&quot;: &quot;85414&quot;,
        &quot;city&quot;: &quot;Imbert&quot;,
        &quot;email&quot;: &quot;wgodard@example.com&quot;,
        &quot;url&quot;: &quot;http://bonnin.com/odit-fugit-aut-omnis-atque-amet.html&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;name&quot;: &quot;Laure Noel&quot;,
        &quot;address&quot;: &quot;88, avenue Lemaire\n78406 Michel-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;44765&quot;,
        &quot;city&quot;: &quot;Rocher-la-For&ecirc;t&quot;,
        &quot;email&quot;: &quot;turpin.remy@example.net&quot;,
        &quot;url&quot;: &quot;http://www.delorme.org/ut-temporibus-quaerat-dolor&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;name&quot;: &quot;Henri Ledoux-Grenier&quot;,
        &quot;address&quot;: &quot;91, impasse de Garcia\n88831 Blanchard&quot;,
        &quot;postalCode&quot;: &quot;70690&quot;,
        &quot;city&quot;: &quot;Dijoux&quot;,
        &quot;email&quot;: &quot;michaud.raymond@example.org&quot;,
        &quot;url&quot;: &quot;http://www.legrand.org/ut-sed-officiis-perspiciatis-dolores-totam-ut-perferendis-commodi&quot;,
        &quot;user_id&quot;: 16,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;name&quot;: &quot;Agn&egrave;s Fabre&quot;,
        &quot;address&quot;: &quot;avenue In&egrave;s Marty\n48019 Colin&quot;,
        &quot;postalCode&quot;: &quot;42551&quot;,
        &quot;city&quot;: &quot;Baron&quot;,
        &quot;email&quot;: &quot;ohumbert@example.org&quot;,
        &quot;url&quot;: &quot;http://www.alexandre.com/consectetur-quod-maxime-architecto-modi-quaerat-pariatur-consequatur&quot;,
        &quot;user_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;name&quot;: &quot;Manon de Benoit&quot;,
        &quot;address&quot;: &quot;8, boulevard Carlier\n04759 NicolasBourg&quot;,
        &quot;postalCode&quot;: &quot;08897&quot;,
        &quot;city&quot;: &quot;Vidal-les-Bains&quot;,
        &quot;email&quot;: &quot;lucas.cohen@example.net&quot;,
        &quot;url&quot;: &quot;http://www.rolland.com/at-dolorem-earum-modi-non-fugit-est&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;name&quot;: &quot;Andr&eacute;e Chauvin&quot;,
        &quot;address&quot;: &quot;955, boulevard Mich&egrave;le Foucher\n52157 GalletVille&quot;,
        &quot;postalCode&quot;: &quot;12632&quot;,
        &quot;city&quot;: &quot;Hoarau-la-For&ecirc;t&quot;,
        &quot;email&quot;: &quot;jdiaz@example.com&quot;,
        &quot;url&quot;: &quot;http://www.potier.com/est-neque-optio-blanditiis-qui&quot;,
        &quot;user_id&quot;: 12,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;name&quot;: &quot;Anastasie de la Duval&quot;,
        &quot;address&quot;: &quot;boulevard de Weiss\n24951 Gimenez-sur-Mer&quot;,
        &quot;postalCode&quot;: &quot;57467&quot;,
        &quot;city&quot;: &quot;Loiseau-la-For&ecirc;t&quot;,
        &quot;email&quot;: &quot;benjamin06@example.org&quot;,
        &quot;url&quot;: &quot;http://parent.fr/voluptatem-adipisci-iusto-aut-non-aut&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;name&quot;: &quot;S&eacute;bastien Ollivier-Ferrand&quot;,
        &quot;address&quot;: &quot;83, rue Timoth&eacute;e Millet\n72340 Lefevre&quot;,
        &quot;postalCode&quot;: &quot;68649&quot;,
        &quot;city&quot;: &quot;Chevallier&quot;,
        &quot;email&quot;: &quot;constance53@example.com&quot;,
        &quot;url&quot;: &quot;https://www.langlois.fr/eum-sit-cumque-et-id&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;name&quot;: &quot;Margaud-Astrid Boutin&quot;,
        &quot;address&quot;: &quot;56, rue de Marchal\n88787 Gilbert-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;84570&quot;,
        &quot;city&quot;: &quot;Roussel&quot;,
        &quot;email&quot;: &quot;aimee.marie@example.net&quot;,
        &quot;url&quot;: &quot;http://pires.org/aperiam-et-vero-autem-dolorem-sunt-id-vel-ut&quot;,
        &quot;user_id&quot;: 16,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;name&quot;: &quot;Isaac-Alphonse Bodin&quot;,
        &quot;address&quot;: &quot;30, boulevard de Masson\n81880 Laporte-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;15316&quot;,
        &quot;city&quot;: &quot;Valentin&quot;,
        &quot;email&quot;: &quot;lacombe.michel@example.com&quot;,
        &quot;url&quot;: &quot;http://www.briand.fr/&quot;,
        &quot;user_id&quot;: 18,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;name&quot;: &quot;Th&eacute;odore Blanchard&quot;,
        &quot;address&quot;: &quot;8, avenue Maillot\n53711 Salmon&quot;,
        &quot;postalCode&quot;: &quot;71307&quot;,
        &quot;city&quot;: &quot;Herve&quot;,
        &quot;email&quot;: &quot;menard.olivie@example.com&quot;,
        &quot;url&quot;: &quot;http://www.mathieu.fr/esse-est-ipsum-repellat-repellendus-consectetur-quia-eveniet-assumenda&quot;,
        &quot;user_id&quot;: 11,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;name&quot;: &quot;Olivie Le Roux&quot;,
        &quot;address&quot;: &quot;60, impasse de Robert\n99628 Roussel-sur-Vasseur&quot;,
        &quot;postalCode&quot;: &quot;71223&quot;,
        &quot;city&quot;: &quot;BriandVille&quot;,
        &quot;email&quot;: &quot;pascal.stephanie@example.org&quot;,
        &quot;url&quot;: &quot;https://www.gaillard.fr/sit-ipsum-aut-esse-sed-voluptates-quod-numquam-ea&quot;,
        &quot;user_id&quot;: 14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;name&quot;: &quot;Fran&ccedil;oise Le Bruneau&quot;,
        &quot;address&quot;: &quot;rue Alfred Pereira\n70169 Bazin-sur-Raymond&quot;,
        &quot;postalCode&quot;: &quot;22474&quot;,
        &quot;city&quot;: &quot;Mace&quot;,
        &quot;email&quot;: &quot;eric68@example.net&quot;,
        &quot;url&quot;: &quot;http://bigot.com/et-cupiditate-necessitatibus-eveniet&quot;,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;name&quot;: &quot;Franck Devaux&quot;,
        &quot;address&quot;: &quot;26, rue Adrien Martins\n89573 Legros-sur-Mer&quot;,
        &quot;postalCode&quot;: &quot;61973&quot;,
        &quot;city&quot;: &quot;BegueBourg&quot;,
        &quot;email&quot;: &quot;ines.laporte@example.com&quot;,
        &quot;url&quot;: &quot;https://legall.com/quo-omnis-quos-sint-debitis-ex-voluptatibus.html&quot;,
        &quot;user_id&quot;: 23,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 55,
        &quot;name&quot;: &quot;Dominique Richard-Morin&quot;,
        &quot;address&quot;: &quot;67, rue Aim&eacute; Lopez\n34760 Menard&quot;,
        &quot;postalCode&quot;: &quot;05821&quot;,
        &quot;city&quot;: &quot;Costa&quot;,
        &quot;email&quot;: &quot;raynaud.jacques@example.com&quot;,
        &quot;url&quot;: &quot;http://www.lemaire.net/optio-voluptatibus-numquam-rerum-fugit-blanditiis-rem-ipsam&quot;,
        &quot;user_id&quot;: 4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 56,
        &quot;name&quot;: &quot;Christelle-Pauline Voisin&quot;,
        &quot;address&quot;: &quot;1, rue Marie\n43097 Tessier-sur-Mer&quot;,
        &quot;postalCode&quot;: &quot;48581&quot;,
        &quot;city&quot;: &quot;LemaitreBourg&quot;,
        &quot;email&quot;: &quot;diane.olivier@example.org&quot;,
        &quot;url&quot;: &quot;http://andre.com/&quot;,
        &quot;user_id&quot;: 26,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;name&quot;: &quot;Marcel Perrin&quot;,
        &quot;address&quot;: &quot;avenue Lemaire\n14583 Allain&quot;,
        &quot;postalCode&quot;: &quot;31262&quot;,
        &quot;city&quot;: &quot;Guillon&quot;,
        &quot;email&quot;: &quot;bernadette86@example.org&quot;,
        &quot;url&quot;: &quot;http://peltier.com/doloremque-voluptates-harum-consequuntur-quia-commodi-alias-laboriosam-aliquam.html&quot;,
        &quot;user_id&quot;: 12,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;name&quot;: &quot;Alexandre-&Eacute;ric Vidal&quot;,
        &quot;address&quot;: &quot;91, rue No&eacute;mi Valette\n94633 RenaultVille&quot;,
        &quot;postalCode&quot;: &quot;60203&quot;,
        &quot;city&quot;: &quot;Ferreira&quot;,
        &quot;email&quot;: &quot;pierre.henry@example.com&quot;,
        &quot;url&quot;: &quot;http://www.gonzalez.fr/voluptatem-aut-facilis-sequi-delectus.html&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 59,
        &quot;name&quot;: &quot;Aim&eacute;e Arnaud&quot;,
        &quot;address&quot;: &quot;1, boulevard de Hernandez\n70157 Julien&quot;,
        &quot;postalCode&quot;: &quot;38353&quot;,
        &quot;city&quot;: &quot;Gilles&quot;,
        &quot;email&quot;: &quot;hsimon@example.net&quot;,
        &quot;url&quot;: &quot;http://www.barthelemy.com/alias-et-aut-autem-odio-aliquam&quot;,
        &quot;user_id&quot;: 24,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 60,
        &quot;name&quot;: &quot;Henriette Grondin&quot;,
        &quot;address&quot;: &quot;5, place de Nicolas\n52145 Germain-la-For&ecirc;t&quot;,
        &quot;postalCode&quot;: &quot;61325&quot;,
        &quot;city&quot;: &quot;Blancnec&quot;,
        &quot;email&quot;: &quot;lpotier@example.net&quot;,
        &quot;url&quot;: &quot;https://muller.org/aliquam-tempora-perspiciatis-quia-dolores.html&quot;,
        &quot;user_id&quot;: 20,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 61,
        &quot;name&quot;: &quot;Xavier Benoit&quot;,
        &quot;address&quot;: &quot;99, chemin de Dumont\n42718 Delattre&quot;,
        &quot;postalCode&quot;: &quot;87463&quot;,
        &quot;city&quot;: &quot;Dufour&quot;,
        &quot;email&quot;: &quot;laurence77@example.net&quot;,
        &quot;url&quot;: &quot;http://etienne.fr/qui-consequatur-dolores-nostrum&quot;,
        &quot;user_id&quot;: 6,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 62,
        &quot;name&quot;: &quot;Maryse Bonnet&quot;,
        &quot;address&quot;: &quot;9, rue Henriette Legrand\n78853 Duval&quot;,
        &quot;postalCode&quot;: &quot;06908&quot;,
        &quot;city&quot;: &quot;Perrin&quot;,
        &quot;email&quot;: &quot;olivie.collin@example.com&quot;,
        &quot;url&quot;: &quot;http://bruneau.org/quibusdam-dolor-quia-repudiandae-temporibus-eum&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 63,
        &quot;name&quot;: &quot;Martin Perrin&quot;,
        &quot;address&quot;: &quot;9, rue Jean Ferrand\n14047 Hebert-sur-Barthelemy&quot;,
        &quot;postalCode&quot;: &quot;00654&quot;,
        &quot;city&quot;: &quot;Marin&quot;,
        &quot;email&quot;: &quot;reynaud.suzanne@example.com&quot;,
        &quot;url&quot;: &quot;https://leblanc.fr/ut-at-similique-deleniti-enim-molestias-eius-blanditiis.html&quot;,
        &quot;user_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 64,
        &quot;name&quot;: &quot;Genevi&egrave;ve Blot&quot;,
        &quot;address&quot;: &quot;boulevard St&eacute;phane Laroche\n89884 Michaud&quot;,
        &quot;postalCode&quot;: &quot;72275&quot;,
        &quot;city&quot;: &quot;Lambert&quot;,
        &quot;email&quot;: &quot;couturier.aurore@example.org&quot;,
        &quot;url&quot;: &quot;http://mathieu.fr/modi-optio-reiciendis-corrupti-et-id&quot;,
        &quot;user_id&quot;: 23,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 65,
        &quot;name&quot;: &quot;Arnaude Guyot&quot;,
        &quot;address&quot;: &quot;61, chemin Guillot\n21697 Martinez&quot;,
        &quot;postalCode&quot;: &quot;09697&quot;,
        &quot;city&quot;: &quot;Leblanc-sur-Richard&quot;,
        &quot;email&quot;: &quot;margaux.nguyen@example.net&quot;,
        &quot;url&quot;: &quot;http://dubois.com/&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 66,
        &quot;name&quot;: &quot;Oc&eacute;ane Maillet&quot;,
        &quot;address&quot;: &quot;75, avenue Suzanne Carre\n90338 Chretienboeuf&quot;,
        &quot;postalCode&quot;: &quot;80077&quot;,
        &quot;city&quot;: &quot;Humbert&quot;,
        &quot;email&quot;: &quot;patricia18@example.com&quot;,
        &quot;url&quot;: &quot;https://laporte.com/autem-error-laudantium-dignissimos-neque.html&quot;,
        &quot;user_id&quot;: 26,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 67,
        &quot;name&quot;: &quot;Richard Blot&quot;,
        &quot;address&quot;: &quot;79, impasse de Benoit\n07019 Garnier&quot;,
        &quot;postalCode&quot;: &quot;91016&quot;,
        &quot;city&quot;: &quot;Pelletier-les-Bains&quot;,
        &quot;email&quot;: &quot;vasseur.adrien@example.org&quot;,
        &quot;url&quot;: &quot;https://www.herve.net/qui-beatae-suscipit-at-est-porro-delectus&quot;,
        &quot;user_id&quot;: 18,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 68,
        &quot;name&quot;: &quot;No&euml;l Gomes-Diallo&quot;,
        &quot;address&quot;: &quot;12, chemin Zo&eacute; Hardy\n23170 Chevalier&quot;,
        &quot;postalCode&quot;: &quot;10618&quot;,
        &quot;city&quot;: &quot;Lemaitre&quot;,
        &quot;email&quot;: &quot;lopes.julien@example.org&quot;,
        &quot;url&quot;: &quot;http://www.weiss.com/est-labore-reprehenderit-quod-autem-optio-laborum-placeat&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 69,
        &quot;name&quot;: &quot;Alfred-Thibault Roy&quot;,
        &quot;address&quot;: &quot;75, avenue de Pruvost\n84986 Barbe&quot;,
        &quot;postalCode&quot;: &quot;79247&quot;,
        &quot;city&quot;: &quot;Marques&quot;,
        &quot;email&quot;: &quot;thomas.blanchard@example.com&quot;,
        &quot;url&quot;: &quot;https://merle.org/iure-est-vitae-molestias-velit.html&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 70,
        &quot;name&quot;: &quot;Marthe de la Gaudin&quot;,
        &quot;address&quot;: &quot;70, impasse de Loiseau\n44780 KleinVille&quot;,
        &quot;postalCode&quot;: &quot;13280&quot;,
        &quot;city&quot;: &quot;Blanc&quot;,
        &quot;email&quot;: &quot;wmenard@example.org&quot;,
        &quot;url&quot;: &quot;http://perrier.com/&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 71,
        &quot;name&quot;: &quot;Laetitia Lebrun&quot;,
        &quot;address&quot;: &quot;70, avenue Monique Diaz\n38978 Grenier-sur-Roy&quot;,
        &quot;postalCode&quot;: &quot;94380&quot;,
        &quot;city&quot;: &quot;Huet-sur-Mer&quot;,
        &quot;email&quot;: &quot;baudry.sophie@example.com&quot;,
        &quot;url&quot;: &quot;http://pelletier.org/repellendus-earum-et-quisquam-accusantium&quot;,
        &quot;user_id&quot;: 13,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 72,
        &quot;name&quot;: &quot;Philippe Bruneau&quot;,
        &quot;address&quot;: &quot;51, place Noel\n26615 Roux&quot;,
        &quot;postalCode&quot;: &quot;42430&quot;,
        &quot;city&quot;: &quot;Lebreton-sur-Durand&quot;,
        &quot;email&quot;: &quot;capucine81@example.com&quot;,
        &quot;url&quot;: &quot;http://mahe.com/aut-in-beatae-et-rerum-reiciendis-dolores.html&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 73,
        &quot;name&quot;: &quot;Emmanuelle Nguyen&quot;,
        &quot;address&quot;: &quot;9, chemin Blin\n59512 LebonBourg&quot;,
        &quot;postalCode&quot;: &quot;10831&quot;,
        &quot;city&quot;: &quot;Besnard&quot;,
        &quot;email&quot;: &quot;jbrunel@example.com&quot;,
        &quot;url&quot;: &quot;http://www.petit.com/maxime-laboriosam-non-commodi-quis-omnis&quot;,
        &quot;user_id&quot;: 14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 74,
        &quot;name&quot;: &quot;Roger de la Boulay&quot;,
        &quot;address&quot;: &quot;16, rue Dupuy\n91298 Jean-sur-Charles&quot;,
        &quot;postalCode&quot;: &quot;59403&quot;,
        &quot;city&quot;: &quot;DupuisBourg&quot;,
        &quot;email&quot;: &quot;dominique49@example.org&quot;,
        &quot;url&quot;: &quot;http://www.laine.fr/aspernatur-quia-illo-omnis&quot;,
        &quot;user_id&quot;: 28,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 75,
        &quot;name&quot;: &quot;Louis Rodriguez-Lenoir&quot;,
        &quot;address&quot;: &quot;5, boulevard de Faivre\n15410 HubertVille&quot;,
        &quot;postalCode&quot;: &quot;24438&quot;,
        &quot;city&quot;: &quot;Roger&quot;,
        &quot;email&quot;: &quot;mbrunel@example.net&quot;,
        &quot;url&quot;: &quot;http://www.gautier.net/aut-quos-eius-velit.html&quot;,
        &quot;user_id&quot;: 9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 76,
        &quot;name&quot;: &quot;Isaac-Th&eacute;ophile Mendes&quot;,
        &quot;address&quot;: &quot;65, chemin de Martineau\n46994 Neveu&quot;,
        &quot;postalCode&quot;: &quot;61780&quot;,
        &quot;city&quot;: &quot;Diaz&quot;,
        &quot;email&quot;: &quot;camille67@example.org&quot;,
        &quot;url&quot;: &quot;http://aubry.fr/aut-consequatur-nobis-distinctio-quo-aut-voluptas.html&quot;,
        &quot;user_id&quot;: 24,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 77,
        &quot;name&quot;: &quot;&Eacute;mile-J&eacute;r&ocirc;me Collet&quot;,
        &quot;address&quot;: &quot;2, impasse &Eacute;ric Barbier\n78135 Girard&quot;,
        &quot;postalCode&quot;: &quot;10764&quot;,
        &quot;city&quot;: &quot;Delahaye&quot;,
        &quot;email&quot;: &quot;chantal42@example.com&quot;,
        &quot;url&quot;: &quot;http://ramos.fr/est-error-consequuntur-quis&quot;,
        &quot;user_id&quot;: 20,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 78,
        &quot;name&quot;: &quot;Jules Dupont-Leconte&quot;,
        &quot;address&quot;: &quot;impasse William Perret\n39562 Martelboeuf&quot;,
        &quot;postalCode&quot;: &quot;31514&quot;,
        &quot;city&quot;: &quot;Wagner&quot;,
        &quot;email&quot;: &quot;susanne06@example.net&quot;,
        &quot;url&quot;: &quot;http://www.antoine.fr/eum-voluptatem-numquam-praesentium-omnis-necessitatibus-quis-sed.html&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 79,
        &quot;name&quot;: &quot;P&eacute;n&eacute;lope-C&eacute;line Pierre&quot;,
        &quot;address&quot;: &quot;29, chemin de Gillet\n45160 Lemoine&quot;,
        &quot;postalCode&quot;: &quot;89209&quot;,
        &quot;city&quot;: &quot;Ferrandboeuf&quot;,
        &quot;email&quot;: &quot;celine.petit@example.org&quot;,
        &quot;url&quot;: &quot;https://dufour.net/qui-eaque-aut-sapiente-voluptatum.html&quot;,
        &quot;user_id&quot;: 2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 80,
        &quot;name&quot;: &quot;Michelle Renault-Adam&quot;,
        &quot;address&quot;: &quot;impasse Begue\n48553 Diallo&quot;,
        &quot;postalCode&quot;: &quot;64287&quot;,
        &quot;city&quot;: &quot;Rollanddan&quot;,
        &quot;email&quot;: &quot;gilbert.emilie@example.com&quot;,
        &quot;url&quot;: &quot;http://pierre.net/tempora-qui-veniam-dolore-laudantium-porro&quot;,
        &quot;user_id&quot;: 26,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 81,
        &quot;name&quot;: &quot;Maryse Martel&quot;,
        &quot;address&quot;: &quot;13, rue Grenier\n64612 Gay&quot;,
        &quot;postalCode&quot;: &quot;87535&quot;,
        &quot;city&quot;: &quot;Barbe-la-For&ecirc;t&quot;,
        &quot;email&quot;: &quot;dumont.rene@example.org&quot;,
        &quot;url&quot;: &quot;http://www.becker.com/fugiat-sed-ut-mollitia-inventore-quis-voluptas-fugiat.html&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 82,
        &quot;name&quot;: &quot;Olivier Lacombe-Mahe&quot;,
        &quot;address&quot;: &quot;99, avenue Garcia\n52955 Gregoire&quot;,
        &quot;postalCode&quot;: &quot;53572&quot;,
        &quot;city&quot;: &quot;Petitjean-sur-Mer&quot;,
        &quot;email&quot;: &quot;lamy.arnaude@example.net&quot;,
        &quot;url&quot;: &quot;http://schmitt.org/esse-quam-sit-accusantium-dignissimos-laboriosam-commodi.html&quot;,
        &quot;user_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 83,
        &quot;name&quot;: &quot;Daniel Pascal&quot;,
        &quot;address&quot;: &quot;860, boulevard Munoz\n57085 Leclerc-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;75973&quot;,
        &quot;city&quot;: &quot;Teixeiradan&quot;,
        &quot;email&quot;: &quot;christophe.dubois@example.net&quot;,
        &quot;url&quot;: &quot;http://delannoy.fr/dolore-est-fugit-aspernatur&quot;,
        &quot;user_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 84,
        &quot;name&quot;: &quot;&Eacute;ric Durand&quot;,
        &quot;address&quot;: &quot;58, impasse S&eacute;bastien Dupont\n28651 Ruiz&quot;,
        &quot;postalCode&quot;: &quot;44257&quot;,
        &quot;city&quot;: &quot;Allard&quot;,
        &quot;email&quot;: &quot;louis77@example.com&quot;,
        &quot;url&quot;: &quot;https://www.mendes.fr/sunt-sunt-molestias-iste-rerum&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 85,
        &quot;name&quot;: &quot;Augustin de Poulain&quot;,
        &quot;address&quot;: &quot;80, rue de Gros\n74418 Rousset-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;28828&quot;,
        &quot;city&quot;: &quot;PottierBourg&quot;,
        &quot;email&quot;: &quot;marc.jacquot@example.net&quot;,
        &quot;url&quot;: &quot;https://becker.fr/dolor-aliquam-similique-aut-est-quidem-autem.html&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 86,
        &quot;name&quot;: &quot;Thibault Roger&quot;,
        &quot;address&quot;: &quot;48, chemin Guillaume Diallo\n02090 Lenoir-la-For&ecirc;t&quot;,
        &quot;postalCode&quot;: &quot;93570&quot;,
        &quot;city&quot;: &quot;Courtois-sur-Rocher&quot;,
        &quot;email&quot;: &quot;corinne54@example.net&quot;,
        &quot;url&quot;: &quot;http://ferrand.fr/vero-repudiandae-cumque-quas-sit-omnis-ea&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 87,
        &quot;name&quot;: &quot;Daniel Ferrand&quot;,
        &quot;address&quot;: &quot;74, place de Roux\n59395 Raymond&quot;,
        &quot;postalCode&quot;: &quot;00649&quot;,
        &quot;city&quot;: &quot;Da Silvadan&quot;,
        &quot;email&quot;: &quot;obesson@example.com&quot;,
        &quot;url&quot;: &quot;http://www.gauthier.com/blanditiis-et-dolor-consectetur&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 88,
        &quot;name&quot;: &quot;Jos&eacute;phine-Ana&iuml;s Peron&quot;,
        &quot;address&quot;: &quot;73, avenue Charpentier\n49500 Bazindan&quot;,
        &quot;postalCode&quot;: &quot;51509&quot;,
        &quot;city&quot;: &quot;Jacob&quot;,
        &quot;email&quot;: &quot;patrick84@example.net&quot;,
        &quot;url&quot;: &quot;http://www.raymond.fr/voluptas-aut-asperiores-quam-adipisci&quot;,
        &quot;user_id&quot;: 18,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 89,
        &quot;name&quot;: &quot;Marianne-Andr&eacute;e Prevost&quot;,
        &quot;address&quot;: &quot;avenue Lacombe\n17042 Torres-sur-Lejeune&quot;,
        &quot;postalCode&quot;: &quot;96974&quot;,
        &quot;city&quot;: &quot;Munoz-les-Bains&quot;,
        &quot;email&quot;: &quot;afaure@example.net&quot;,
        &quot;url&quot;: &quot;https://www.grenier.fr/qui-et-vitae-adipisci-consectetur-et-ut-laborum&quot;,
        &quot;user_id&quot;: 17,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 90,
        &quot;name&quot;: &quot;Th&eacute;odore Muller&quot;,
        &quot;address&quot;: &quot;88, avenue de Deschamps\n22337 LecoqVille&quot;,
        &quot;postalCode&quot;: &quot;29143&quot;,
        &quot;city&quot;: &quot;Voisin&quot;,
        &quot;email&quot;: &quot;robert.marc@example.org&quot;,
        &quot;url&quot;: &quot;http://torres.com/repudiandae-dolor-temporibus-sed-rerum-quibusdam-vitae-cumque&quot;,
        &quot;user_id&quot;: 13,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 91,
        &quot;name&quot;: &quot;Jules Sanchez&quot;,
        &quot;address&quot;: &quot;538, boulevard Margot Vallee\n46706 Noel&quot;,
        &quot;postalCode&quot;: &quot;00529&quot;,
        &quot;city&quot;: &quot;Hubert&quot;,
        &quot;email&quot;: &quot;descamps.marine@example.com&quot;,
        &quot;url&quot;: &quot;http://www.mathieu.fr/ut-quisquam-eos-repellat-qui-ratione-odit.html&quot;,
        &quot;user_id&quot;: 9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 92,
        &quot;name&quot;: &quot;Richard Lagarde&quot;,
        &quot;address&quot;: &quot;381, rue Emmanuel Laurent\n98851 Leclercq-sur-Regnier&quot;,
        &quot;postalCode&quot;: &quot;76647&quot;,
        &quot;city&quot;: &quot;PerrierVille&quot;,
        &quot;email&quot;: &quot;lelievre.benjamin@example.net&quot;,
        &quot;url&quot;: &quot;http://www.thomas.fr/&quot;,
        &quot;user_id&quot;: 15,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 93,
        &quot;name&quot;: &quot;Emmanuel Weber&quot;,
        &quot;address&quot;: &quot;39, chemin Mich&egrave;le Rousset\n71245 Hamon-sur-Gilbert&quot;,
        &quot;postalCode&quot;: &quot;09218&quot;,
        &quot;city&quot;: &quot;Denis&quot;,
        &quot;email&quot;: &quot;broyer@example.net&quot;,
        &quot;url&quot;: &quot;https://www.jacques.com/est-in-iure-rerum-esse-eos-repellat&quot;,
        &quot;user_id&quot;: 7,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 94,
        &quot;name&quot;: &quot;Claire-Cl&eacute;mence Prevost&quot;,
        &quot;address&quot;: &quot;154, boulevard Aim&eacute; Levy\n26896 Peltier&quot;,
        &quot;postalCode&quot;: &quot;72688&quot;,
        &quot;city&quot;: &quot;Bertin&quot;,
        &quot;email&quot;: &quot;petit.audrey@example.net&quot;,
        &quot;url&quot;: &quot;http://www.pineau.org/dolores-eveniet-numquam-deleniti-qui.html&quot;,
        &quot;user_id&quot;: 9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 95,
        &quot;name&quot;: &quot;William Royer&quot;,
        &quot;address&quot;: &quot;2, boulevard de Georges\n78305 Leroynec&quot;,
        &quot;postalCode&quot;: &quot;11248&quot;,
        &quot;city&quot;: &quot;Traore&quot;,
        &quot;email&quot;: &quot;gallet.alexandre@example.net&quot;,
        &quot;url&quot;: &quot;http://arnaud.fr/&quot;,
        &quot;user_id&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 96,
        &quot;name&quot;: &quot;Benjamin-Honor&eacute; Imbert&quot;,
        &quot;address&quot;: &quot;11, place Michaud\n52882 BarbierVille&quot;,
        &quot;postalCode&quot;: &quot;37536&quot;,
        &quot;city&quot;: &quot;Munoz&quot;,
        &quot;email&quot;: &quot;philippe.diallo@example.com&quot;,
        &quot;url&quot;: &quot;http://www.gregoire.com/est-quis-sint-sed-laboriosam-quam-consequatur-consectetur&quot;,
        &quot;user_id&quot;: 22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 97,
        &quot;name&quot;: &quot;P&eacute;n&eacute;lope Gallet&quot;,
        &quot;address&quot;: &quot;88, avenue Beno&icirc;t Auger\n66574 Durand&quot;,
        &quot;postalCode&quot;: &quot;09073&quot;,
        &quot;city&quot;: &quot;Le Gall&quot;,
        &quot;email&quot;: &quot;celine92@example.org&quot;,
        &quot;url&quot;: &quot;http://laurent.org/et-qui-distinctio-et-et-culpa-est&quot;,
        &quot;user_id&quot;: 19,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 98,
        &quot;name&quot;: &quot;Patricia Lemaire&quot;,
        &quot;address&quot;: &quot;215, rue Benard\n96908 Guillou-sur-Mer&quot;,
        &quot;postalCode&quot;: &quot;98693&quot;,
        &quot;city&quot;: &quot;CosteVille&quot;,
        &quot;email&quot;: &quot;oceane66@example.org&quot;,
        &quot;url&quot;: &quot;http://www.vasseur.com/&quot;,
        &quot;user_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 99,
        &quot;name&quot;: &quot;Denise Simon-Etienne&quot;,
        &quot;address&quot;: &quot;72, avenue de Toussaint\n25535 Remy&quot;,
        &quot;postalCode&quot;: &quot;61714&quot;,
        &quot;city&quot;: &quot;Blanchardboeuf&quot;,
        &quot;email&quot;: &quot;celina.petitjean@example.org&quot;,
        &quot;url&quot;: &quot;http://www.lelievre.com/et-voluptatem-cum-nemo-in&quot;,
        &quot;user_id&quot;: 25,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    },
    {
        &quot;id&quot;: 100,
        &quot;name&quot;: &quot;Nicole Ramos&quot;,
        &quot;address&quot;: &quot;68, chemin Dominique Poirier\n43241 Bousquet-les-Bains&quot;,
        &quot;postalCode&quot;: &quot;74978&quot;,
        &quot;city&quot;: &quot;RousseauBourg&quot;,
        &quot;email&quot;: &quot;aime.ferreira@example.com&quot;,
        &quot;url&quot;: &quot;http://www.millet.fr/et-quia-laborum-voluptates-voluptates.html&quot;,
        &quot;user_id&quot;: 28,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-debug-customers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-debug-customers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-debug-customers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-debug-customers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-debug-customers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-debug-customers" data-method="GET"
      data-path="api/v1/debug/customers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-debug-customers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-debug-customers"
                    onclick="tryItOut('GETapi-v1-debug-customers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-debug-customers"
                    onclick="cancelTryOut('GETapi-v1-debug-customers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-debug-customers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/debug/customers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-debug-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-debug-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-debug-customers">POST api/v1/debug/customers</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-debug-customers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://ali-api.test/api/v1/debug/customers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/customers"
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

<span id="example-responses-POSTapi-v1-debug-customers">
</span>
<span id="execution-results-POSTapi-v1-debug-customers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-debug-customers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-debug-customers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-debug-customers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-debug-customers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-debug-customers" data-method="POST"
      data-path="api/v1/debug/customers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-debug-customers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-debug-customers"
                    onclick="tryItOut('POSTapi-v1-debug-customers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-debug-customers"
                    onclick="cancelTryOut('POSTapi-v1-debug-customers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-debug-customers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/debug/customers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-debug-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-debug-customers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-debug-customers--id-">GET api/v1/debug/customers/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-debug-customers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/debug/customers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/customers/1"
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

<span id="example-responses-GETapi-v1-debug-customers--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Simone-Adrienne Salmon&quot;,
    &quot;address&quot;: &quot;17, place de Leroux\n92561 Rouxboeuf&quot;,
    &quot;postalCode&quot;: &quot;93328&quot;,
    &quot;city&quot;: &quot;Briandboeuf&quot;,
    &quot;email&quot;: &quot;adele21@example.org&quot;,
    &quot;url&quot;: &quot;http://bonnin.fr/&quot;,
    &quot;user_id&quot;: 14,
    &quot;created_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-09-26T16:25:45.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-debug-customers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-debug-customers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-debug-customers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-debug-customers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-debug-customers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-debug-customers--id-" data-method="GET"
      data-path="api/v1/debug/customers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-debug-customers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-debug-customers--id-"
                    onclick="tryItOut('GETapi-v1-debug-customers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-debug-customers--id-"
                    onclick="cancelTryOut('GETapi-v1-debug-customers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-debug-customers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/debug/customers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-debug-customers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-debug-customers--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-debug-customers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the customer. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-debug-customers--id-">PUT api/v1/debug/customers/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-debug-customers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://ali-api.test/api/v1/debug/customers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/customers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-debug-customers--id-">
</span>
<span id="execution-results-PUTapi-v1-debug-customers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-debug-customers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-debug-customers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-debug-customers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-debug-customers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-debug-customers--id-" data-method="PUT"
      data-path="api/v1/debug/customers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-debug-customers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-debug-customers--id-"
                    onclick="tryItOut('PUTapi-v1-debug-customers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-debug-customers--id-"
                    onclick="cancelTryOut('PUTapi-v1-debug-customers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-debug-customers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/debug/customers/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/debug/customers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-debug-customers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-debug-customers--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-debug-customers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the customer. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-debug-category">GET api/v1/debug/category</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-debug-category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/debug/category" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/category"
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

<span id="example-responses-GETapi-v1-debug-category">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;name&quot;: &quot;Josette-Marguerite Riou&quot;
    },
    {
        &quot;name&quot;: &quot;Thibaut Faure&quot;
    },
    {
        &quot;name&quot;: &quot;Zacharie Foucher&quot;
    },
    {
        &quot;name&quot;: &quot;Isabelle Prevost-Lebreton&quot;
    },
    {
        &quot;name&quot;: &quot;Adrien Dupre-Mathieu&quot;
    },
    {
        &quot;name&quot;: &quot;S&eacute;bastien Leger&quot;
    },
    {
        &quot;name&quot;: &quot;V&eacute;ronique Verdier&quot;
    },
    {
        &quot;name&quot;: &quot;L&eacute;on Schmitt&quot;
    },
    {
        &quot;name&quot;: &quot;&Eacute;dith Guibert&quot;
    },
    {
        &quot;name&quot;: &quot;Thibaut-Pierre Breton&quot;
    },
    {
        &quot;name&quot;: &quot;Denise Riou&quot;
    },
    {
        &quot;name&quot;: &quot;Margot Charpentier&quot;
    },
    {
        &quot;name&quot;: &quot;R&eacute;my Delaunay&quot;
    },
    {
        &quot;name&quot;: &quot;Joseph Samson&quot;
    },
    {
        &quot;name&quot;: &quot;Lucas Labbe&quot;
    },
    {
        &quot;name&quot;: &quot;Capucine Le Mallet&quot;
    },
    {
        &quot;name&quot;: &quot;No&eacute;mi Cordier-Pires&quot;
    },
    {
        &quot;name&quot;: &quot;Isaac Durand&quot;
    },
    {
        &quot;name&quot;: &quot;Paulette-Aurore Blot&quot;
    },
    {
        &quot;name&quot;: &quot;Fr&eacute;d&eacute;rique Collin&quot;
    },
    {
        &quot;name&quot;: &quot;Guillaume Alves&quot;
    },
    {
        &quot;name&quot;: &quot;Laurent Lemaitre&quot;
    },
    {
        &quot;name&quot;: &quot;Andr&eacute;e-Caroline Loiseau&quot;
    },
    {
        &quot;name&quot;: &quot;Franck Dupre&quot;
    },
    {
        &quot;name&quot;: &quot;Doroth&eacute;e Munoz&quot;
    },
    {
        &quot;name&quot;: &quot;Daniel Poirier&quot;
    },
    {
        &quot;name&quot;: &quot;Gilles Le Peron&quot;
    },
    {
        &quot;name&quot;: &quot;In&egrave;s de la Ferreira&quot;
    },
    {
        &quot;name&quot;: &quot;Philippe Simon-Charles&quot;
    },
    {
        &quot;name&quot;: &quot;V&eacute;ronique Leclercq&quot;
    },
    {
        &quot;name&quot;: &quot;Bernard Rousset&quot;
    },
    {
        &quot;name&quot;: &quot;Jeannine Le Charpentier&quot;
    },
    {
        &quot;name&quot;: &quot;Martine Gimenez&quot;
    },
    {
        &quot;name&quot;: &quot;Sylvie Carlier-Martinez&quot;
    },
    {
        &quot;name&quot;: &quot;Zacharie Aubry&quot;
    },
    {
        &quot;name&quot;: &quot;Camille-C&eacute;cile Samson&quot;
    },
    {
        &quot;name&quot;: &quot;Virginie Gros&quot;
    },
    {
        &quot;name&quot;: &quot;Alfred Lopez&quot;
    },
    {
        &quot;name&quot;: &quot;Vincent Girard&quot;
    },
    {
        &quot;name&quot;: &quot;Fran&ccedil;ois Jacob&quot;
    },
    {
        &quot;name&quot;: &quot;Fr&eacute;d&eacute;ric-Nicolas Fernandez&quot;
    },
    {
        &quot;name&quot;: &quot;Philippe Lecomte&quot;
    },
    {
        &quot;name&quot;: &quot;Laetitia Le Bruneau&quot;
    },
    {
        &quot;name&quot;: &quot;R&eacute;my-Luc Hoareau&quot;
    },
    {
        &quot;name&quot;: &quot;Ad&egrave;le du Dumont&quot;
    },
    {
        &quot;name&quot;: &quot;Gr&eacute;goire Lejeune&quot;
    },
    {
        &quot;name&quot;: &quot;L&eacute;on-Denis Auger&quot;
    },
    {
        &quot;name&quot;: &quot;V&eacute;ronique Le Goff&quot;
    },
    {
        &quot;name&quot;: &quot;Isaac de la Gosselin&quot;
    },
    {
        &quot;name&quot;: &quot;Dominique Dupre&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-debug-category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-debug-category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-debug-category"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-debug-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-debug-category">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-debug-category" data-method="GET"
      data-path="api/v1/debug/category"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-debug-category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-debug-category"
                    onclick="tryItOut('GETapi-v1-debug-category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-debug-category"
                    onclick="cancelTryOut('GETapi-v1-debug-category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-debug-category"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/debug/category</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-debug-category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-debug-category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-debug-category">POST api/v1/debug/category</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-debug-category">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://ali-api.test/api/v1/debug/category" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/category"
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

<span id="example-responses-POSTapi-v1-debug-category">
</span>
<span id="execution-results-POSTapi-v1-debug-category" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-debug-category"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-debug-category"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-debug-category" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-debug-category">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-debug-category" data-method="POST"
      data-path="api/v1/debug/category"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-debug-category', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-debug-category"
                    onclick="tryItOut('POSTapi-v1-debug-category');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-debug-category"
                    onclick="cancelTryOut('POSTapi-v1-debug-category');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-debug-category"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/debug/category</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-debug-category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-debug-category"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-v1-debug-category--id-">PUT api/v1/debug/category/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-debug-category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://ali-api.test/api/v1/debug/category/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/category/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-debug-category--id-">
</span>
<span id="execution-results-PUTapi-v1-debug-category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-debug-category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-debug-category--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-debug-category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-debug-category--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-debug-category--id-" data-method="PUT"
      data-path="api/v1/debug/category/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-debug-category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-debug-category--id-"
                    onclick="tryItOut('PUTapi-v1-debug-category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-debug-category--id-"
                    onclick="cancelTryOut('PUTapi-v1-debug-category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-debug-category--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/debug/category/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/debug/category/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-debug-category--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-debug-category--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-debug-category--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-debug-category--id-">DELETE api/v1/debug/category/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-debug-category--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://ali-api.test/api/v1/debug/category/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/category/1"
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

<span id="example-responses-DELETEapi-v1-debug-category--id-">
</span>
<span id="execution-results-DELETEapi-v1-debug-category--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-debug-category--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-debug-category--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-debug-category--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-debug-category--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-debug-category--id-" data-method="DELETE"
      data-path="api/v1/debug/category/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-debug-category--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-debug-category--id-"
                    onclick="tryItOut('DELETEapi-v1-debug-category--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-debug-category--id-"
                    onclick="cancelTryOut('DELETEapi-v1-debug-category--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-debug-category--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/debug/category/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-debug-category--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-debug-category--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-debug-category--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-debug-orders">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-debug-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/debug/orders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/orders"
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

<span id="example-responses-GETapi-v1-debug-orders">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;reference&quot;: &quot;sapiente&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 63.4238267,
        &quot;amountVAT&quot;: 118.37,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;reference&quot;: &quot;ullam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 71,
        &quot;amountET&quot;: 3738727.47,
        &quot;amountVAT&quot;: 1532.45,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;reference&quot;: &quot;architecto&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 8.746,
        &quot;amountVAT&quot;: 605.4313618,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;reference&quot;: &quot;ex&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 8.5518109,
        &quot;amountVAT&quot;: 89738.53126,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;reference&quot;: &quot;est&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 90,
        &quot;amountET&quot;: 670.6503756,
        &quot;amountVAT&quot;: 3167160.9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 79,
        &quot;amountET&quot;: 738295,
        &quot;amountVAT&quot;: 106243.938,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;reference&quot;: &quot;impedit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 19,
        &quot;amountET&quot;: 66157.475,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;reference&quot;: &quot;perferendis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 3,
        &quot;amountET&quot;: 19904.8230984,
        &quot;amountVAT&quot;: 2.5862748,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;reference&quot;: &quot;ipsam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 10,
        &quot;amountET&quot;: 34.100681,
        &quot;amountVAT&quot;: 20.52,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;reference&quot;: &quot;est&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 7,
        &quot;amountET&quot;: 837.8,
        &quot;amountVAT&quot;: 588115.979,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;reference&quot;: &quot;doloremque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 67,
        &quot;amountET&quot;: 3.6733119,
        &quot;amountVAT&quot;: 1412602,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;reference&quot;: &quot;autem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 25,
        &quot;amountET&quot;: 1099.217,
        &quot;amountVAT&quot;: 452,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;reference&quot;: &quot;aut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 0.73,
        &quot;amountVAT&quot;: 373.17528,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;reference&quot;: &quot;nihil&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 326839740.79536,
        &quot;amountVAT&quot;: 43.403338219,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;reference&quot;: &quot;sequi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 57,
        &quot;amountET&quot;: 52.3613,
        &quot;amountVAT&quot;: 23524.35501475,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;reference&quot;: &quot;beatae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 523998.2,
        &quot;amountVAT&quot;: 1751.0713654,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;reference&quot;: &quot;laboriosam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 11,
        &quot;amountET&quot;: 2229.01,
        &quot;amountVAT&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 49,
        &quot;amountET&quot;: 956790199.03567,
        &quot;amountVAT&quot;: 5173921.176754,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;reference&quot;: &quot;eligendi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 58,
        &quot;amountET&quot;: 392.8937,
        &quot;amountVAT&quot;: 420798203.1328,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;reference&quot;: &quot;incidunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 62,
        &quot;amountET&quot;: 2802227.4653334,
        &quot;amountVAT&quot;: 8182541.5773489,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;reference&quot;: &quot;odit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 42,
        &quot;amountET&quot;: 2912629,
        &quot;amountVAT&quot;: 50140.5583637,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 22,
        &quot;reference&quot;: &quot;vel&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 61,
        &quot;amountET&quot;: 46953.78026262,
        &quot;amountVAT&quot;: 51527977.311193,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;reference&quot;: &quot;necessitatibus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 4280.5797281,
        &quot;amountVAT&quot;: 407.24366,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;reference&quot;: &quot;maxime&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 68,
        &quot;amountET&quot;: 1027.7088801,
        &quot;amountVAT&quot;: 7826,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;reference&quot;: &quot;ab&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 2822264.70064,
        &quot;amountVAT&quot;: 4605.841,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;reference&quot;: &quot;exercitationem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 57,
        &quot;amountET&quot;: 0.448438,
        &quot;amountVAT&quot;: 5735.972535267,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;reference&quot;: &quot;natus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 74,
        &quot;amountET&quot;: 5459.326,
        &quot;amountVAT&quot;: 670543.438402,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;reference&quot;: &quot;quae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 305.9679,
        &quot;amountVAT&quot;: 38200.26,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;reference&quot;: &quot;asperiores&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 37,
        &quot;amountET&quot;: 3691.06,
        &quot;amountVAT&quot;: 49091.173,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;reference&quot;: &quot;vero&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 53,
        &quot;amountET&quot;: 190998408.17271,
        &quot;amountVAT&quot;: 170.1758,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 21,
        &quot;amountET&quot;: 425.7785,
        &quot;amountVAT&quot;: 67893787.3028,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;reference&quot;: &quot;distinctio&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 94,
        &quot;amountET&quot;: 7291439,
        &quot;amountVAT&quot;: 222.881854,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 85,
        &quot;amountET&quot;: 29.872,
        &quot;amountVAT&quot;: 108317412.5861,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;reference&quot;: &quot;voluptas&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 99,
        &quot;amountET&quot;: 293.12555,
        &quot;amountVAT&quot;: 23585.6875384,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 35,
        &quot;reference&quot;: &quot;in&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 64,
        &quot;amountET&quot;: 11.68777672,
        &quot;amountVAT&quot;: 2.55820055,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 36,
        &quot;reference&quot;: &quot;ipsam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 75,
        &quot;amountET&quot;: 2740.278408168,
        &quot;amountVAT&quot;: 2986246.0650825,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 37,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 21,
        &quot;amountET&quot;: 85615582.377,
        &quot;amountVAT&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 38,
        &quot;reference&quot;: &quot;aliquid&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 158975.7413055,
        &quot;amountVAT&quot;: 2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 39,
        &quot;reference&quot;: &quot;ipsa&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 66,
        &quot;amountET&quot;: 10644.8423085,
        &quot;amountVAT&quot;: 0.51747105,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 40,
        &quot;reference&quot;: &quot;quam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 45,
        &quot;amountET&quot;: 5528.802520097,
        &quot;amountVAT&quot;: 2728.32212235,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 41,
        &quot;reference&quot;: &quot;voluptas&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 54,
        &quot;amountET&quot;: 21248.8815462,
        &quot;amountVAT&quot;: 64103,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 42,
        &quot;reference&quot;: &quot;reprehenderit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 42,
        &quot;amountET&quot;: 4426476.3751439,
        &quot;amountVAT&quot;: 651193.763,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 43,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 51,
        &quot;amountET&quot;: 263421.5,
        &quot;amountVAT&quot;: 61133906.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 44,
        &quot;reference&quot;: &quot;laboriosam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 39,
        &quot;amountET&quot;: 199.1,
        &quot;amountVAT&quot;: 278502173.894,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 45,
        &quot;reference&quot;: &quot;eligendi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 1,
        &quot;amountET&quot;: 211.12051,
        &quot;amountVAT&quot;: 28905.7576,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 46,
        &quot;reference&quot;: &quot;sunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 99,
        &quot;amountET&quot;: 0.821,
        &quot;amountVAT&quot;: 122455.127,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 47,
        &quot;reference&quot;: &quot;cupiditate&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 60,
        &quot;amountET&quot;: 228273478.67782,
        &quot;amountVAT&quot;: 7558032.8539,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 48,
        &quot;reference&quot;: &quot;dolor&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 2,
        &quot;amountET&quot;: 15085875.357,
        &quot;amountVAT&quot;: 2922997.1142216,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 49,
        &quot;reference&quot;: &quot;repudiandae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 37,
        &quot;amountET&quot;: 0.28533207,
        &quot;amountVAT&quot;: 50960218.48,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 50,
        &quot;reference&quot;: &quot;possimus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 49,
        &quot;amountET&quot;: 573876.25631515,
        &quot;amountVAT&quot;: 1150.697943,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 51,
        &quot;reference&quot;: &quot;consequatur&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 79,
        &quot;amountET&quot;: 178.6,
        &quot;amountVAT&quot;: 1304.3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 52,
        &quot;reference&quot;: &quot;eligendi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 68,
        &quot;amountET&quot;: 51816.11,
        &quot;amountVAT&quot;: 99.2458,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 53,
        &quot;reference&quot;: &quot;praesentium&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 18,
        &quot;amountET&quot;: 683.1,
        &quot;amountVAT&quot;: 12284559.147543,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 54,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 71,
        &quot;amountET&quot;: 30.88,
        &quot;amountVAT&quot;: 207291220.5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 55,
        &quot;reference&quot;: &quot;ea&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 69,
        &quot;amountET&quot;: 31.5,
        &quot;amountVAT&quot;: 359111.46532,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 56,
        &quot;reference&quot;: &quot;magni&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 54,
        &quot;amountET&quot;: 45.56543,
        &quot;amountVAT&quot;: 500.706,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 57,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 6.6,
        &quot;amountVAT&quot;: 160.2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 58,
        &quot;reference&quot;: &quot;cumque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 27,
        &quot;amountET&quot;: 6.7,
        &quot;amountVAT&quot;: 36449887.42,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 59,
        &quot;reference&quot;: &quot;odio&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 100,
        &quot;amountET&quot;: 2984,
        &quot;amountVAT&quot;: 685730047.50874,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 60,
        &quot;reference&quot;: &quot;provident&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 0.75,
        &quot;amountVAT&quot;: 643.598,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 61,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 45,
        &quot;amountET&quot;: 308.29482,
        &quot;amountVAT&quot;: 59521.6989313,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 62,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 43,
        &quot;amountET&quot;: 5755.6185388,
        &quot;amountVAT&quot;: 50373.461868654,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 63,
        &quot;reference&quot;: &quot;perferendis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 7,
        &quot;amountET&quot;: 1.758459,
        &quot;amountVAT&quot;: 0.70971013,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 64,
        &quot;reference&quot;: &quot;labore&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 165.4,
        &quot;amountVAT&quot;: 87017.275,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 65,
        &quot;reference&quot;: &quot;a&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 7542.8,
        &quot;amountVAT&quot;: 82382093.5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 66,
        &quot;reference&quot;: &quot;quod&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 83,
        &quot;amountET&quot;: 127912.4345115,
        &quot;amountVAT&quot;: 21503523.14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 67,
        &quot;reference&quot;: &quot;assumenda&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 77364.76010483,
        &quot;amountVAT&quot;: 8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 68,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 70,
        &quot;amountET&quot;: 212.39,
        &quot;amountVAT&quot;: 1584345.7438231,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 69,
        &quot;reference&quot;: &quot;provident&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 96,
        &quot;amountET&quot;: 31085925.643153,
        &quot;amountVAT&quot;: 175.23312659,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 70,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 98,
        &quot;amountET&quot;: 6079,
        &quot;amountVAT&quot;: 1054888.438,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 71,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 73,
        &quot;amountET&quot;: 65.9,
        &quot;amountVAT&quot;: 478587.7013,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 72,
        &quot;reference&quot;: &quot;modi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 95,
        &quot;amountET&quot;: 570020.41,
        &quot;amountVAT&quot;: 113018.8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 73,
        &quot;reference&quot;: &quot;perspiciatis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 23,
        &quot;amountET&quot;: 0.21577,
        &quot;amountVAT&quot;: 496193.3302,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 74,
        &quot;reference&quot;: &quot;sed&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 43,
        &quot;amountET&quot;: 75791.271086819,
        &quot;amountVAT&quot;: 31141,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 75,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 60,
        &quot;amountET&quot;: 8255581,
        &quot;amountVAT&quot;: 142,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 76,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 79,
        &quot;amountET&quot;: 11.9574143,
        &quot;amountVAT&quot;: 3651629.5855434,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 77,
        &quot;reference&quot;: &quot;totam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 77,
        &quot;amountET&quot;: 520640.0746,
        &quot;amountVAT&quot;: 50709,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 78,
        &quot;reference&quot;: &quot;sit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 98,
        &quot;amountET&quot;: 398682491.984,
        &quot;amountVAT&quot;: 54272.96029347,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 79,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 30,
        &quot;amountET&quot;: 8161355.937,
        &quot;amountVAT&quot;: 6455,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 80,
        &quot;reference&quot;: &quot;voluptatem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 81,
        &quot;amountET&quot;: 0.79,
        &quot;amountVAT&quot;: 551.2201,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 81,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 510.666782332,
        &quot;amountVAT&quot;: 227757.9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 82,
        &quot;reference&quot;: &quot;perspiciatis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 28,
        &quot;amountET&quot;: 5,
        &quot;amountVAT&quot;: 36,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 83,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 22,
        &quot;amountET&quot;: 12431963.41,
        &quot;amountVAT&quot;: 28057.59649458,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 84,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 24,
        &quot;amountET&quot;: 4.52,
        &quot;amountVAT&quot;: 233709.00970459,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 85,
        &quot;reference&quot;: &quot;laborum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 50,
        &quot;amountET&quot;: 518.234,
        &quot;amountVAT&quot;: 5630.22,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 86,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 28,
        &quot;amountET&quot;: 11726.2152798,
        &quot;amountVAT&quot;: 503127.61088224,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 87,
        &quot;reference&quot;: &quot;aliquid&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 55700446,
        &quot;amountVAT&quot;: 20151453.1643,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 88,
        &quot;reference&quot;: &quot;dolore&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 77,
        &quot;amountET&quot;: 18.432262636,
        &quot;amountVAT&quot;: 194959.7604762,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 89,
        &quot;reference&quot;: &quot;atque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 48.212572796,
        &quot;amountVAT&quot;: 1932.61233237,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 90,
        &quot;reference&quot;: &quot;tempora&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 68,
        &quot;amountET&quot;: 20264.18,
        &quot;amountVAT&quot;: 29229587.24,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 91,
        &quot;reference&quot;: &quot;facilis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 15,
        &quot;amountET&quot;: 131,
        &quot;amountVAT&quot;: 1836.4556373,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 92,
        &quot;reference&quot;: &quot;sed&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 63,
        &quot;amountET&quot;: 1.6174,
        &quot;amountVAT&quot;: 83290143.768175,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 93,
        &quot;reference&quot;: &quot;deserunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 80,
        &quot;amountET&quot;: 6040389.8572539,
        &quot;amountVAT&quot;: 50639.950548,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 94,
        &quot;reference&quot;: &quot;minima&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 99,
        &quot;amountET&quot;: 0.99677812,
        &quot;amountVAT&quot;: 37191.28570658,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 95,
        &quot;reference&quot;: &quot;quaerat&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 99,
        &quot;amountET&quot;: 62748528.82,
        &quot;amountVAT&quot;: 6210816.45,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 96,
        &quot;reference&quot;: &quot;aut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 100,
        &quot;amountET&quot;: 2.944798,
        &quot;amountVAT&quot;: 777.9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 97,
        &quot;reference&quot;: &quot;quis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 43,
        &quot;amountET&quot;: 209068.90587556,
        &quot;amountVAT&quot;: 10635430.43655,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 98,
        &quot;reference&quot;: &quot;voluptates&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 78,
        &quot;amountET&quot;: 396759.64782,
        &quot;amountVAT&quot;: 6733799.5200663,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 99,
        &quot;reference&quot;: &quot;neque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 16402136.800849,
        &quot;amountVAT&quot;: 11285719.682846,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 100,
        &quot;reference&quot;: &quot;distinctio&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 0.03,
        &quot;amountVAT&quot;: 21829703.138367,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 101,
        &quot;reference&quot;: &quot;eos&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 85,
        &quot;amountET&quot;: 7.1203594,
        &quot;amountVAT&quot;: 193.883161,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 102,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 14,
        &quot;amountET&quot;: 185.5001,
        &quot;amountVAT&quot;: 0.969626,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 103,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 49.382940249,
        &quot;amountVAT&quot;: 60210949.195075,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 104,
        &quot;reference&quot;: &quot;non&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 93,
        &quot;amountET&quot;: 132172.209,
        &quot;amountVAT&quot;: 470.69018485,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 105,
        &quot;reference&quot;: &quot;libero&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 86,
        &quot;amountET&quot;: 505.43914838,
        &quot;amountVAT&quot;: 309420.43,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 106,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 9,
        &quot;amountET&quot;: 4.1757,
        &quot;amountVAT&quot;: 57075749.25,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 107,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 46,
        &quot;amountET&quot;: 1.401528763,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 108,
        &quot;reference&quot;: &quot;natus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 45,
        &quot;amountET&quot;: 6341.1303,
        &quot;amountVAT&quot;: 4.29771,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 109,
        &quot;reference&quot;: &quot;explicabo&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 43,
        &quot;amountET&quot;: 3881474.80673,
        &quot;amountVAT&quot;: 61032.8030964,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 110,
        &quot;reference&quot;: &quot;quasi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 41,
        &quot;amountET&quot;: 6289980.157499,
        &quot;amountVAT&quot;: 87793.75088,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 111,
        &quot;reference&quot;: &quot;corrupti&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 59,
        &quot;amountET&quot;: 83.559267401,
        &quot;amountVAT&quot;: 74086787.5181,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 112,
        &quot;reference&quot;: &quot;debitis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 30,
        &quot;amountET&quot;: 26674.05,
        &quot;amountVAT&quot;: 44.442348,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 113,
        &quot;reference&quot;: &quot;molestiae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 3,
        &quot;amountET&quot;: 31640389.852306,
        &quot;amountVAT&quot;: 172.48,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 114,
        &quot;reference&quot;: &quot;voluptatem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 3,
        &quot;amountET&quot;: 24.537939,
        &quot;amountVAT&quot;: 38.86474916,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 115,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 418.371766,
        &quot;amountVAT&quot;: 3.62235256,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 116,
        &quot;reference&quot;: &quot;repudiandae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 33,
        &quot;amountET&quot;: 39682822.27376,
        &quot;amountVAT&quot;: 51143.198247,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 117,
        &quot;reference&quot;: &quot;suscipit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 91,
        &quot;amountET&quot;: 4.11905852,
        &quot;amountVAT&quot;: 563537.16160647,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 118,
        &quot;reference&quot;: &quot;porro&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 28,
        &quot;amountET&quot;: 6692.11205,
        &quot;amountVAT&quot;: 80648.114116959,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 119,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 27.99821187,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 120,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 84,
        &quot;amountET&quot;: 17.36151995,
        &quot;amountVAT&quot;: 2.561194584,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 121,
        &quot;reference&quot;: &quot;error&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 93,
        &quot;amountET&quot;: 32697.181060714,
        &quot;amountVAT&quot;: 274.93095,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 122,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 30,
        &quot;amountET&quot;: 708.855667,
        &quot;amountVAT&quot;: 29014,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 123,
        &quot;reference&quot;: &quot;assumenda&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 10,
        &quot;amountET&quot;: 684167.518252,
        &quot;amountVAT&quot;: 0.092166781,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 124,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 13,
        &quot;amountET&quot;: 7114008,
        &quot;amountVAT&quot;: 4564666.7713019,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 125,
        &quot;reference&quot;: &quot;iste&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 64,
        &quot;amountET&quot;: 1413165.925,
        &quot;amountVAT&quot;: 16174.28,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 126,
        &quot;reference&quot;: &quot;aut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 207.6672,
        &quot;amountVAT&quot;: 8240.659404,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 127,
        &quot;reference&quot;: &quot;deleniti&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 14,
        &quot;amountET&quot;: 10885246,
        &quot;amountVAT&quot;: 643776948.34482,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 128,
        &quot;reference&quot;: &quot;beatae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 2,
        &quot;amountET&quot;: 197518.41606668,
        &quot;amountVAT&quot;: 1.0818,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 129,
        &quot;reference&quot;: &quot;reiciendis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 10,
        &quot;amountET&quot;: 53.153630395,
        &quot;amountVAT&quot;: 2205278.981,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 130,
        &quot;reference&quot;: &quot;est&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 22,
        &quot;amountET&quot;: 28266.089,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 131,
        &quot;reference&quot;: &quot;voluptas&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 55,
        &quot;amountET&quot;: 74.930828,
        &quot;amountVAT&quot;: 1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 132,
        &quot;reference&quot;: &quot;quos&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 56,
        &quot;amountET&quot;: 76,
        &quot;amountVAT&quot;: 0.98074,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 133,
        &quot;reference&quot;: &quot;esse&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 69,
        &quot;amountET&quot;: 81554.757,
        &quot;amountVAT&quot;: 1.9792,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 134,
        &quot;reference&quot;: &quot;dolores&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 3265639.8183042,
        &quot;amountVAT&quot;: 4.1494556,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 135,
        &quot;reference&quot;: &quot;adipisci&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 60,
        &quot;amountET&quot;: 5227843.0609103,
        &quot;amountVAT&quot;: 468.57,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 136,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 49,
        &quot;amountET&quot;: 313101818.90774,
        &quot;amountVAT&quot;: 44.28664,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 137,
        &quot;reference&quot;: &quot;aut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 10,
        &quot;amountET&quot;: 438060.8,
        &quot;amountVAT&quot;: 2.2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 138,
        &quot;reference&quot;: &quot;vero&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 20,
        &quot;amountET&quot;: 272.455,
        &quot;amountVAT&quot;: 131693.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 139,
        &quot;reference&quot;: &quot;esse&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 8,
        &quot;amountET&quot;: 15087622.4,
        &quot;amountVAT&quot;: 262.2456,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 140,
        &quot;reference&quot;: &quot;temporibus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 242736.33342174,
        &quot;amountVAT&quot;: 1.471968524,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 141,
        &quot;reference&quot;: &quot;neque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 54979.953139,
        &quot;amountVAT&quot;: 8530979.54756,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 142,
        &quot;reference&quot;: &quot;sit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 72,
        &quot;amountET&quot;: 42920572.61,
        &quot;amountVAT&quot;: 54782392.256994,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 143,
        &quot;reference&quot;: &quot;eius&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 59,
        &quot;amountET&quot;: 0.3946648,
        &quot;amountVAT&quot;: 111,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 144,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 54,
        &quot;amountET&quot;: 23867.7653559,
        &quot;amountVAT&quot;: 586.634,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 145,
        &quot;reference&quot;: &quot;dolores&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 62,
        &quot;amountET&quot;: 28070626.718,
        &quot;amountVAT&quot;: 7144818.87647,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 146,
        &quot;reference&quot;: &quot;est&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:46.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 4545799.9,
        &quot;amountVAT&quot;: 9992.8832,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 147,
        &quot;reference&quot;: &quot;porro&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 100,
        &quot;amountET&quot;: 36502009.053,
        &quot;amountVAT&quot;: 1384634.626553,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 148,
        &quot;reference&quot;: &quot;voluptatem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 83,
        &quot;amountET&quot;: 5228.13,
        &quot;amountVAT&quot;: 6.385643746,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 149,
        &quot;reference&quot;: &quot;atque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 4,
        &quot;amountET&quot;: 875004.6764,
        &quot;amountVAT&quot;: 31433.92590055,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 150,
        &quot;reference&quot;: &quot;vel&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 78,
        &quot;amountET&quot;: 1511.5702873,
        &quot;amountVAT&quot;: 27818224.384368,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 151,
        &quot;reference&quot;: &quot;sit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 60,
        &quot;amountET&quot;: 75817.48487209,
        &quot;amountVAT&quot;: 54.9,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 152,
        &quot;reference&quot;: &quot;similique&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 93,
        &quot;amountET&quot;: 2759.853546527,
        &quot;amountVAT&quot;: 558,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 153,
        &quot;reference&quot;: &quot;tenetur&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 6,
        &quot;amountET&quot;: 3680123.9931924,
        &quot;amountVAT&quot;: 1025.6138,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 154,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 98,
        &quot;amountET&quot;: 0,
        &quot;amountVAT&quot;: 5162203.33,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 155,
        &quot;reference&quot;: &quot;vero&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 49,
        &quot;amountET&quot;: 2.048,
        &quot;amountVAT&quot;: 200903.67018663,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 156,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 7,
        &quot;amountET&quot;: 101652.586,
        &quot;amountVAT&quot;: 11845,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 157,
        &quot;reference&quot;: &quot;doloremque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 13,
        &quot;amountET&quot;: 39868674,
        &quot;amountVAT&quot;: 18.2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 158,
        &quot;reference&quot;: &quot;fugiat&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 71,
        &quot;amountET&quot;: 630576333.279,
        &quot;amountVAT&quot;: 3179.82,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 159,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 94,
        &quot;amountET&quot;: 2707246.559149,
        &quot;amountVAT&quot;: 1919,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 160,
        &quot;reference&quot;: &quot;tempora&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 73,
        &quot;amountET&quot;: 105019.43944135,
        &quot;amountVAT&quot;: 6722403.972483,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 161,
        &quot;reference&quot;: &quot;eaque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 89,
        &quot;amountET&quot;: 3015.84,
        &quot;amountVAT&quot;: 37707.8,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 162,
        &quot;reference&quot;: &quot;ipsum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 13,
        &quot;amountET&quot;: 475954.6,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 163,
        &quot;reference&quot;: &quot;itaque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 47,
        &quot;amountET&quot;: 44.4,
        &quot;amountVAT&quot;: 47.5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 164,
        &quot;reference&quot;: &quot;aliquam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 21200.098672302,
        &quot;amountVAT&quot;: 7661593.2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 165,
        &quot;reference&quot;: &quot;alias&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 71,
        &quot;amountET&quot;: 7595,
        &quot;amountVAT&quot;: 7499.32141861,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 166,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 58,
        &quot;amountET&quot;: 2413.925813,
        &quot;amountVAT&quot;: 62567.8156,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 167,
        &quot;reference&quot;: &quot;eum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 47,
        &quot;amountET&quot;: 381233578.0743,
        &quot;amountVAT&quot;: 3008.816781659,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 168,
        &quot;reference&quot;: &quot;molestiae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 14,
        &quot;amountET&quot;: 260139036.84443,
        &quot;amountVAT&quot;: 5,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 169,
        &quot;reference&quot;: &quot;temporibus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 58,
        &quot;amountET&quot;: 321894899.742,
        &quot;amountVAT&quot;: 1239734.8179743,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 170,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 4.419448,
        &quot;amountVAT&quot;: 76543.378834994,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 171,
        &quot;reference&quot;: &quot;quisquam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 34,
        &quot;amountET&quot;: 12244110.677,
        &quot;amountVAT&quot;: 83.68678,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 172,
        &quot;reference&quot;: &quot;rem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 65,
        &quot;amountET&quot;: 20093.242420069,
        &quot;amountVAT&quot;: 11436.74028457,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 173,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 56,
        &quot;amountET&quot;: 70617.3,
        &quot;amountVAT&quot;: 5807052.049,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 174,
        &quot;reference&quot;: &quot;accusantium&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 63,
        &quot;amountET&quot;: 38.52,
        &quot;amountVAT&quot;: 409724.65,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 175,
        &quot;reference&quot;: &quot;quo&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 67,
        &quot;amountET&quot;: 230.54674223,
        &quot;amountVAT&quot;: 1062389.8889586,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 176,
        &quot;reference&quot;: &quot;reiciendis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 85,
        &quot;amountET&quot;: 2724558.521,
        &quot;amountVAT&quot;: 0.07135,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 177,
        &quot;reference&quot;: &quot;nihil&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 74,
        &quot;amountET&quot;: 498684.0975517,
        &quot;amountVAT&quot;: 5596.7,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 178,
        &quot;reference&quot;: &quot;sit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 30,
        &quot;amountET&quot;: 73045.36934732,
        &quot;amountVAT&quot;: 0,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 179,
        &quot;reference&quot;: &quot;voluptatum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 46,
        &quot;amountET&quot;: 321007.660121,
        &quot;amountVAT&quot;: 167.9239,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 180,
        &quot;reference&quot;: &quot;ad&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 84,
        &quot;amountET&quot;: 19340760.2667,
        &quot;amountVAT&quot;: 286976.473,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 181,
        &quot;reference&quot;: &quot;enim&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 62,
        &quot;amountET&quot;: 75933853.283023,
        &quot;amountVAT&quot;: 640026266.46286,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 182,
        &quot;reference&quot;: &quot;atque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 46,
        &quot;amountET&quot;: 0.12,
        &quot;amountVAT&quot;: 2765.0223,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 183,
        &quot;reference&quot;: &quot;temporibus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 34,
        &quot;amountET&quot;: 4805741.7,
        &quot;amountVAT&quot;: 5757.18167,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 184,
        &quot;reference&quot;: &quot;est&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 24,
        &quot;amountET&quot;: 608739.37178723,
        &quot;amountVAT&quot;: 6926.7514,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 185,
        &quot;reference&quot;: &quot;quae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 354.9893282,
        &quot;amountVAT&quot;: 1614.6,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 186,
        &quot;reference&quot;: &quot;officia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 69,
        &quot;amountET&quot;: 516.1622364,
        &quot;amountVAT&quot;: 412428.94351456,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 187,
        &quot;reference&quot;: &quot;laudantium&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 80,
        &quot;amountET&quot;: 1164153.46,
        &quot;amountVAT&quot;: 3177050.14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 188,
        &quot;reference&quot;: &quot;non&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 3046035.99,
        &quot;amountVAT&quot;: 8470899.3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 189,
        &quot;reference&quot;: &quot;vel&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 85,
        &quot;amountET&quot;: 1.54695537,
        &quot;amountVAT&quot;: 704449.6251,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 190,
        &quot;reference&quot;: &quot;itaque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 98,
        &quot;amountET&quot;: 73300041.3237,
        &quot;amountVAT&quot;: 955.15,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 191,
        &quot;reference&quot;: &quot;voluptatibus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 83,
        &quot;amountET&quot;: 27077879.555,
        &quot;amountVAT&quot;: 28465.34705192,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 192,
        &quot;reference&quot;: &quot;eaque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 55,
        &quot;amountET&quot;: 124.53357968,
        &quot;amountVAT&quot;: 4764.2718511,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 193,
        &quot;reference&quot;: &quot;sapiente&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 55,
        &quot;amountET&quot;: 2856.61862,
        &quot;amountVAT&quot;: 422.93,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 194,
        &quot;reference&quot;: &quot;ipsam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 46.6556252,
        &quot;amountVAT&quot;: 4821.195190097,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 195,
        &quot;reference&quot;: &quot;magni&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 94,
        &quot;amountET&quot;: 141.08731634,
        &quot;amountVAT&quot;: 4641.593,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 196,
        &quot;reference&quot;: &quot;magnam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 57,
        &quot;amountET&quot;: 18978069.537356,
        &quot;amountVAT&quot;: 5075.4920243,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 197,
        &quot;reference&quot;: &quot;ratione&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 94,
        &quot;amountET&quot;: 3.303826,
        &quot;amountVAT&quot;: 20236.820338558,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 198,
        &quot;reference&quot;: &quot;animi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 46,
        &quot;amountET&quot;: 779040079.78393,
        &quot;amountVAT&quot;: 843.9762,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 199,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 3,
        &quot;amountET&quot;: 590.58393514,
        &quot;amountVAT&quot;: 1.932346334,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 200,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 57,
        &quot;amountET&quot;: 1.18228,
        &quot;amountVAT&quot;: 62.97834,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 201,
        &quot;reference&quot;: &quot;in&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 9,
        &quot;amountET&quot;: 3345,
        &quot;amountVAT&quot;: 5533617.4756165,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 202,
        &quot;reference&quot;: &quot;sapiente&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 1,
        &quot;amountET&quot;: 4356722.3174,
        &quot;amountVAT&quot;: 1303106.763998,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 203,
        &quot;reference&quot;: &quot;suscipit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 3,
        &quot;amountET&quot;: 799481.8196208,
        &quot;amountVAT&quot;: 178.7079,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 204,
        &quot;reference&quot;: &quot;minus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 51,
        &quot;amountET&quot;: 2.7194,
        &quot;amountVAT&quot;: 97250665.540859,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 205,
        &quot;reference&quot;: &quot;nam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 11,
        &quot;amountET&quot;: 0.777635,
        &quot;amountVAT&quot;: 2116780.89142,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 206,
        &quot;reference&quot;: &quot;suscipit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 21,
        &quot;amountET&quot;: 120.67761,
        &quot;amountVAT&quot;: 491.5068,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 207,
        &quot;reference&quot;: &quot;labore&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 39,
        &quot;amountET&quot;: 1795.3952,
        &quot;amountVAT&quot;: 46136107.792477,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 208,
        &quot;reference&quot;: &quot;molestiae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 78,
        &quot;amountET&quot;: 46.362256135,
        &quot;amountVAT&quot;: 1491532.729466,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 209,
        &quot;reference&quot;: &quot;iusto&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 52,
        &quot;amountET&quot;: 267494058.15,
        &quot;amountVAT&quot;: 298569.58,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 210,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 96,
        &quot;amountET&quot;: 14,
        &quot;amountVAT&quot;: 6423,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 211,
        &quot;reference&quot;: &quot;voluptate&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 7,
        &quot;amountET&quot;: 185509.15263405,
        &quot;amountVAT&quot;: 273229.4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 212,
        &quot;reference&quot;: &quot;aspernatur&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 50,
        &quot;amountET&quot;: 1246.42383,
        &quot;amountVAT&quot;: 2902814.45,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 213,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 33,
        &quot;amountET&quot;: 441.3121,
        &quot;amountVAT&quot;: 3,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 214,
        &quot;reference&quot;: &quot;molestias&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 55,
        &quot;amountET&quot;: 19.93574934,
        &quot;amountVAT&quot;: 333059622.8495,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 215,
        &quot;reference&quot;: &quot;officiis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 92,
        &quot;amountET&quot;: 839.567909,
        &quot;amountVAT&quot;: 17822493.882,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 216,
        &quot;reference&quot;: &quot;inventore&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 54,
        &quot;amountET&quot;: 313882.124154,
        &quot;amountVAT&quot;: 11812.51118,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 217,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 68,
        &quot;amountET&quot;: 360.14017607,
        &quot;amountVAT&quot;: 212912.4327624,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 218,
        &quot;reference&quot;: &quot;nobis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 61,
        &quot;amountET&quot;: 217.075,
        &quot;amountVAT&quot;: 2933269,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 219,
        &quot;reference&quot;: &quot;sed&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 24,
        &quot;amountET&quot;: 307083168.3,
        &quot;amountVAT&quot;: 1226.07,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 220,
        &quot;reference&quot;: &quot;voluptatum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 55,
        &quot;amountET&quot;: 4427102.3176,
        &quot;amountVAT&quot;: 8.031767766,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 221,
        &quot;reference&quot;: &quot;dolorem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 63,
        &quot;amountET&quot;: 12654093.561,
        &quot;amountVAT&quot;: 9037.494146,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 222,
        &quot;reference&quot;: &quot;asperiores&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 45,
        &quot;amountET&quot;: 46762.2658831,
        &quot;amountVAT&quot;: 174918,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 223,
        &quot;reference&quot;: &quot;molestiae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 36,
        &quot;amountET&quot;: 158.20729,
        &quot;amountVAT&quot;: 81764.844988213,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 224,
        &quot;reference&quot;: &quot;minima&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 69,
        &quot;amountET&quot;: 3.057,
        &quot;amountVAT&quot;: 85.61516446,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 225,
        &quot;reference&quot;: &quot;iure&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 11,
        &quot;amountET&quot;: 1.7,
        &quot;amountVAT&quot;: 564269.6977,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 226,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 64,
        &quot;amountET&quot;: 676264618.09,
        &quot;amountVAT&quot;: 1777.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 227,
        &quot;reference&quot;: &quot;nihil&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 25,
        &quot;amountET&quot;: 1905713.5,
        &quot;amountVAT&quot;: 4843715.1193338,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 228,
        &quot;reference&quot;: &quot;fugiat&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 41,
        &quot;amountET&quot;: 86560368.471,
        &quot;amountVAT&quot;: 31.0885846,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 229,
        &quot;reference&quot;: &quot;sequi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 19,
        &quot;amountET&quot;: 2440263.1467472,
        &quot;amountVAT&quot;: 26.56,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 230,
        &quot;reference&quot;: &quot;aut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 93,
        &quot;amountET&quot;: 132979.1,
        &quot;amountVAT&quot;: 261805.6207,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 231,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 2,
        &quot;amountET&quot;: 13185.063262849,
        &quot;amountVAT&quot;: 3028.307,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 232,
        &quot;reference&quot;: &quot;quo&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 61,
        &quot;amountET&quot;: 27391759.7191,
        &quot;amountVAT&quot;: 1269695,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 233,
        &quot;reference&quot;: &quot;incidunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 10,
        &quot;amountET&quot;: 45423637,
        &quot;amountVAT&quot;: 6822340.8986,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 234,
        &quot;reference&quot;: &quot;sint&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 81,
        &quot;amountET&quot;: 358702.6696778,
        &quot;amountVAT&quot;: 10.935103,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 235,
        &quot;reference&quot;: &quot;quod&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 11,
        &quot;amountET&quot;: 207015683.9,
        &quot;amountVAT&quot;: 4.00373188,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 236,
        &quot;reference&quot;: &quot;sunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 12,
        &quot;amountET&quot;: 38.612385979,
        &quot;amountVAT&quot;: 3908.67,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 237,
        &quot;reference&quot;: &quot;illum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 48,
        &quot;amountET&quot;: 65889828.4,
        &quot;amountVAT&quot;: 34.4280675,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 238,
        &quot;reference&quot;: &quot;cumque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 90,
        &quot;amountET&quot;: 1731992.9589313,
        &quot;amountVAT&quot;: 4.54255,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 239,
        &quot;reference&quot;: &quot;unde&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 752014687.571,
        &quot;amountVAT&quot;: 3834.12,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 240,
        &quot;reference&quot;: &quot;nobis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 41,
        &quot;amountET&quot;: 5784154.854456,
        &quot;amountVAT&quot;: 6563.03,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 241,
        &quot;reference&quot;: &quot;nam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 32,
        &quot;amountET&quot;: 109788914.9,
        &quot;amountVAT&quot;: 4929.02076,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 242,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 34,
        &quot;amountET&quot;: 4.175576,
        &quot;amountVAT&quot;: 60.9843,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 243,
        &quot;reference&quot;: &quot;accusamus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 2514751.0112114,
        &quot;amountVAT&quot;: 15563158.020903,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 244,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 99,
        &quot;amountET&quot;: 29238528.157,
        &quot;amountVAT&quot;: 259213.8336074,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 245,
        &quot;reference&quot;: &quot;cupiditate&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 1,
        &quot;amountET&quot;: 0,
        &quot;amountVAT&quot;: 830089.64887908,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 246,
        &quot;reference&quot;: &quot;tempore&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 8,
        &quot;amountET&quot;: 5.007478524,
        &quot;amountVAT&quot;: 158.87433,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 247,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 8,
        &quot;amountET&quot;: 3175593.1826661,
        &quot;amountVAT&quot;: 262702200.92469,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 248,
        &quot;reference&quot;: &quot;deleniti&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 31,
        &quot;amountET&quot;: 1.64785,
        &quot;amountVAT&quot;: 544343.188,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 249,
        &quot;reference&quot;: &quot;quia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 50,
        &quot;amountET&quot;: 47.13,
        &quot;amountVAT&quot;: 418,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 250,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 74,
        &quot;amountET&quot;: 601776.3,
        &quot;amountVAT&quot;: 7.2878303,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 251,
        &quot;reference&quot;: &quot;veniam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 95,
        &quot;amountET&quot;: 5.92699,
        &quot;amountVAT&quot;: 4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 252,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 57,
        &quot;amountET&quot;: 43887.58,
        &quot;amountVAT&quot;: 8.14,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 253,
        &quot;reference&quot;: &quot;laborum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 31,
        &quot;amountET&quot;: 11.250655773,
        &quot;amountVAT&quot;: 422.1201,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 254,
        &quot;reference&quot;: &quot;illum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 46,
        &quot;amountET&quot;: 72671.900728755,
        &quot;amountVAT&quot;: 0.288,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 255,
        &quot;reference&quot;: &quot;harum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 4,
        &quot;amountET&quot;: 30560.20641,
        &quot;amountVAT&quot;: 1179,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 256,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 44092.02056118,
        &quot;amountVAT&quot;: 5469.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 257,
        &quot;reference&quot;: &quot;velit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 56,
        &quot;amountET&quot;: 758.562149,
        &quot;amountVAT&quot;: 2.6688883,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 258,
        &quot;reference&quot;: &quot;eum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 13032411.342,
        &quot;amountVAT&quot;: 13.7585727,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 259,
        &quot;reference&quot;: &quot;reiciendis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 77,
        &quot;amountET&quot;: 2514.6677502,
        &quot;amountVAT&quot;: 7,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 260,
        &quot;reference&quot;: &quot;sit&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 39,
        &quot;amountET&quot;: 18247644.978552,
        &quot;amountVAT&quot;: 21346295.2367,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 261,
        &quot;reference&quot;: &quot;omnis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 33,
        &quot;amountET&quot;: 15.095018,
        &quot;amountVAT&quot;: 3943358.90204,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 262,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 68,
        &quot;amountET&quot;: 1.9314,
        &quot;amountVAT&quot;: 397887.29904985,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 263,
        &quot;reference&quot;: &quot;cum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 95,
        &quot;amountET&quot;: 3477140,
        &quot;amountVAT&quot;: 402635.5194,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 264,
        &quot;reference&quot;: &quot;corrupti&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 4,
        &quot;amountET&quot;: 3.79516,
        &quot;amountVAT&quot;: 53980.84,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 265,
        &quot;reference&quot;: &quot;sunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 20,
        &quot;amountET&quot;: 5241.50402837,
        &quot;amountVAT&quot;: 31369.69,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 266,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 61,
        &quot;amountET&quot;: 533071.36396512,
        &quot;amountVAT&quot;: 3.701261,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 267,
        &quot;reference&quot;: &quot;sunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 45,
        &quot;amountET&quot;: 267.36373,
        &quot;amountVAT&quot;: 61373340.47963,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 268,
        &quot;reference&quot;: &quot;similique&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 66,
        &quot;amountET&quot;: 0.8553,
        &quot;amountVAT&quot;: 1.351784,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 269,
        &quot;reference&quot;: &quot;nihil&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 47,
        &quot;amountET&quot;: 585917726.8,
        &quot;amountVAT&quot;: 1489.247392841,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 270,
        &quot;reference&quot;: &quot;sequi&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 5,
        &quot;amountET&quot;: 659130224.91007,
        &quot;amountVAT&quot;: 7960187.9481,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 271,
        &quot;reference&quot;: &quot;expedita&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 15,
        &quot;amountET&quot;: 0.3952,
        &quot;amountVAT&quot;: 23405.972,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 272,
        &quot;reference&quot;: &quot;totam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 75,
        &quot;amountET&quot;: 769.9384728,
        &quot;amountVAT&quot;: 45574750.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 273,
        &quot;reference&quot;: &quot;mollitia&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 56,
        &quot;amountET&quot;: 14.776,
        &quot;amountVAT&quot;: 4299,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 274,
        &quot;reference&quot;: &quot;recusandae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 74,
        &quot;amountET&quot;: 2393615.7,
        &quot;amountVAT&quot;: 4057.057,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 275,
        &quot;reference&quot;: &quot;eum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 27,
        &quot;amountET&quot;: 9876.0302133,
        &quot;amountVAT&quot;: 2.7433,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 276,
        &quot;reference&quot;: &quot;repellendus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 39,
        &quot;amountET&quot;: 28.915495147,
        &quot;amountVAT&quot;: 25.0932629,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 277,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 100,
        &quot;amountET&quot;: 5.7981,
        &quot;amountVAT&quot;: 1905868.74904,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 278,
        &quot;reference&quot;: &quot;vero&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 78,
        &quot;amountET&quot;: 2076.36430968,
        &quot;amountVAT&quot;: 319790190.1957,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 279,
        &quot;reference&quot;: &quot;et&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 20,
        &quot;amountET&quot;: 235708788.87147,
        &quot;amountVAT&quot;: 353390.17896,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 280,
        &quot;reference&quot;: &quot;veniam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 78,
        &quot;amountET&quot;: 1060027.45494,
        &quot;amountVAT&quot;: 4.9366,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 281,
        &quot;reference&quot;: &quot;ea&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 1.2,
        &quot;amountVAT&quot;: 123562.963,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 282,
        &quot;reference&quot;: &quot;quisquam&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 40,
        &quot;amountET&quot;: 18.5581,
        &quot;amountVAT&quot;: 30874390.994414,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 283,
        &quot;reference&quot;: &quot;repellendus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 19,
        &quot;amountET&quot;: 72150114.5677,
        &quot;amountVAT&quot;: 83563,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 284,
        &quot;reference&quot;: &quot;placeat&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 2,
        &quot;amountET&quot;: 20.7,
        &quot;amountVAT&quot;: 5.71987,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 285,
        &quot;reference&quot;: &quot;beatae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 12,
        &quot;amountET&quot;: 680,
        &quot;amountVAT&quot;: 15.49177,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 286,
        &quot;reference&quot;: &quot;nesciunt&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 76,
        &quot;amountET&quot;: 4567253.0675515,
        &quot;amountVAT&quot;: 41976768.546085,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 287,
        &quot;reference&quot;: &quot;optio&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 97,
        &quot;amountET&quot;: 11.7280585,
        &quot;amountVAT&quot;: 260473.75768171,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 288,
        &quot;reference&quot;: &quot;porro&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 51,
        &quot;amountET&quot;: 259733700.8186,
        &quot;amountVAT&quot;: 44,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 289,
        &quot;reference&quot;: &quot;rem&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 61,
        &quot;amountET&quot;: 58030.198,
        &quot;amountVAT&quot;: 4986.166,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 290,
        &quot;reference&quot;: &quot;rerum&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 19,
        &quot;amountET&quot;: 25538.4972216,
        &quot;amountVAT&quot;: 49,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 291,
        &quot;reference&quot;: &quot;tempora&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 72,
        &quot;amountET&quot;: 2076.15822,
        &quot;amountVAT&quot;: 42624.4,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 292,
        &quot;reference&quot;: &quot;amet&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 28,
        &quot;amountET&quot;: 644426.555689,
        &quot;amountVAT&quot;: 42891501.80205,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 293,
        &quot;reference&quot;: &quot;cumque&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 20,
        &quot;amountET&quot;: 6.06,
        &quot;amountVAT&quot;: 638542471.84847,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 294,
        &quot;reference&quot;: &quot;natus&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 17,
        &quot;amountET&quot;: 1836494.471,
        &quot;amountVAT&quot;: 625.09801,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 295,
        &quot;reference&quot;: &quot;occaecati&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 98,
        &quot;amountET&quot;: 1.254,
        &quot;amountVAT&quot;: 20.9197,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 296,
        &quot;reference&quot;: &quot;recusandae&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 6,
        &quot;amountET&quot;: 1198.518611,
        &quot;amountVAT&quot;: 565376850,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 297,
        &quot;reference&quot;: &quot;dignissimos&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 56,
        &quot;amountET&quot;: 36889991.494959,
        &quot;amountVAT&quot;: 55861843.2,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 298,
        &quot;reference&quot;: &quot;qui&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 65,
        &quot;amountET&quot;: 442.0645,
        &quot;amountVAT&quot;: 1016.404225801,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 299,
        &quot;reference&quot;: &quot;ut&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 28,
        &quot;amountET&quot;: 43.0004,
        &quot;amountVAT&quot;: 2491.1,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    },
    {
        &quot;id&quot;: 300,
        &quot;reference&quot;: &quot;debitis&quot;,
        &quot;creationDate&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;customer_id&quot;: 59,
        &quot;amountET&quot;: 5.47692,
        &quot;amountVAT&quot;: 858677154.59,
        &quot;created_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-09-26T16:25:47.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-debug-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-debug-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-debug-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-debug-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-debug-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-debug-orders" data-method="GET"
      data-path="api/v1/debug/orders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-debug-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-debug-orders"
                    onclick="tryItOut('GETapi-v1-debug-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-debug-orders"
                    onclick="cancelTryOut('GETapi-v1-debug-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-debug-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/debug/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-debug-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-debug-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-debug-orders-create">Show the form for creating a new resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-debug-orders-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/debug/orders/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/orders/create"
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

<span id="example-responses-GETapi-v1-debug-orders-create">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-debug-orders-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-debug-orders-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-debug-orders-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-debug-orders-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-debug-orders-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-debug-orders-create" data-method="GET"
      data-path="api/v1/debug/orders/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-debug-orders-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-debug-orders-create"
                    onclick="tryItOut('GETapi-v1-debug-orders-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-debug-orders-create"
                    onclick="cancelTryOut('GETapi-v1-debug-orders-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-debug-orders-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/debug/orders/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-debug-orders-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-debug-orders-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-debug-orders">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-debug-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://ali-api.test/api/v1/debug/orders" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/orders"
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

<span id="example-responses-POSTapi-v1-debug-orders">
</span>
<span id="execution-results-POSTapi-v1-debug-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-debug-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-debug-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-debug-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-debug-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-debug-orders" data-method="POST"
      data-path="api/v1/debug/orders"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-debug-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-debug-orders"
                    onclick="tryItOut('POSTapi-v1-debug-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-debug-orders"
                    onclick="cancelTryOut('POSTapi-v1-debug-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-debug-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/debug/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-debug-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-debug-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-debug-orders--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-debug-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/debug/orders/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/orders/1"
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

<span id="example-responses-GETapi-v1-debug-orders--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-debug-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-debug-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-debug-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-debug-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-debug-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-debug-orders--id-" data-method="GET"
      data-path="api/v1/debug/orders/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-debug-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-debug-orders--id-"
                    onclick="tryItOut('GETapi-v1-debug-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-debug-orders--id-"
                    onclick="cancelTryOut('GETapi-v1-debug-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-debug-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/debug/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-debug-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-debug-orders--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-debug-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-debug-orders--order--edit">Show the form for editing the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-debug-orders--order--edit">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://ali-api.test/api/v1/debug/orders/1/edit" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/orders/1/edit"
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

<span id="example-responses-GETapi-v1-debug-orders--order--edit">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-debug-orders--order--edit" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-debug-orders--order--edit"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-debug-orders--order--edit"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-debug-orders--order--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-debug-orders--order--edit">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-debug-orders--order--edit" data-method="GET"
      data-path="api/v1/debug/orders/{order}/edit"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-debug-orders--order--edit', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-debug-orders--order--edit"
                    onclick="tryItOut('GETapi-v1-debug-orders--order--edit');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-debug-orders--order--edit"
                    onclick="cancelTryOut('GETapi-v1-debug-orders--order--edit');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-debug-orders--order--edit"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/debug/orders/{order}/edit</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-debug-orders--order--edit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-debug-orders--order--edit"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order"                data-endpoint="GETapi-v1-debug-orders--order--edit"
               value="1"
               data-component="url">
    <br>
<p>The order. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-debug-orders--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-debug-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://ali-api.test/api/v1/debug/orders/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/orders/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-debug-orders--id-">
</span>
<span id="execution-results-PUTapi-v1-debug-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-debug-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-debug-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-debug-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-debug-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-v1-debug-orders--id-" data-method="PUT"
      data-path="api/v1/debug/orders/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-debug-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-debug-orders--id-"
                    onclick="tryItOut('PUTapi-v1-debug-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-debug-orders--id-"
                    onclick="cancelTryOut('PUTapi-v1-debug-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-debug-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/debug/orders/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/debug/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-v1-debug-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-v1-debug-orders--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-v1-debug-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-debug-orders--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-debug-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://ali-api.test/api/v1/debug/orders/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://ali-api.test/api/v1/debug/orders/1"
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

<span id="example-responses-DELETEapi-v1-debug-orders--id-">
</span>
<span id="execution-results-DELETEapi-v1-debug-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-debug-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-debug-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-debug-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-debug-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-debug-orders--id-" data-method="DELETE"
      data-path="api/v1/debug/orders/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-debug-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-debug-orders--id-"
                    onclick="tryItOut('DELETEapi-v1-debug-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-debug-orders--id-"
                    onclick="cancelTryOut('DELETEapi-v1-debug-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-debug-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/debug/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-debug-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-debug-orders--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-debug-orders--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>1</code></p>
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
