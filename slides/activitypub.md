<!-- Matthias Pfefferle -->
<section data-markdown>

# ActivityPub

</section>

<section data-markdown>

# Was ist ActivityPub?

</section>

<section data-markdown>

> The ActivityPub protocol is a decentralized social networking protocol based upon the ActivityStreams 2.0 data format. It provides a client to server API for creating, updating and deleting content, as well as a federated server to server API for delivering notifications and content.

<small>https://www.w3.org/TR/activitypub/</small>

</section>

<section data-markdown>

# Activity + Pub

</section>

<section data-markdown>

# Activity

</section>

<section data-markdown>

# ActivityStreams

</section>

<section data-markdown>

# Historie

*

</section>

<section data-markdown>

<pre><code>&lt;entry xmlns=&quot;http://www.w3.org/2005/Atom&quot;
    xmlns:activity=&quot;http://activitystrea.ms/spec/1.0/&quot;&gt;
  &lt;id&gt;tag:photopanic.example.com,2009:activity/4859/4352&lt;/id&gt;
  &lt;title&gt;Geraldine posted a Photo on PhotoPanic&lt;/title&gt;
  &lt;link rel=&quot;alternate&quot; type=&quot;text/html&quot; href=&quot;http://example.com/...&quot; /&gt;
  &lt;activity:verb&gt;post&lt;/activity:verb&gt;
  &lt;activity:object&gt;
    &lt;id&gt;tag:photopanic.example.com,2009:photo/4352&lt;/id&gt;
    &lt;title&gt;My Cat&lt;/title&gt;
    &lt;published&gt;2009-11-02T15:29:00Z&lt;/published&gt;
    &lt;link rel=&quot;alternate&quot; type=&quot;text/html&quot; href=&quot;http://example.com/...&quot; /&gt;
    &lt;activity:object-type&gt;photo&lt;/activity:object-type&gt;
  &lt;/activity:object&gt;
  &lt;content type=&quot;html&quot;&gt;...&lt;/content&gt;
&lt;/entry&gt;</code></pre>

</section>

<section data-markdown>

<pre><code>{
    "@context": "https://www.w3.org/ns/activitystreams",
    "type": "Create",
    "id": "https://social.example/alyssa/posts/a29a6843",
    "to": ["https://chatty.example/ben/"],
    "actor": "https://social.example/alyssa/",
    "object": {
        "type": "Note",
        "id": "https://social.example/alyssa/posts/49e2d03d",
        "attributedTo": "https://social.example/alyssa/",
        "to": ["https://chatty.example/ben/"],
        "content": "Say, did you finish reading that book I lent you?"
    }
}</code></pre>

</section>

<section data-markdown>

<pre><code>{
    "@context": "https://www.w3.org/ns/activitystreams",
    "type": "Like",
    "id": "https://social.example/alyssa/posts/5312e10e",
    "to": ["https://chatty.example/ben/"],
    "actor": "https://social.example/alyssa/",
    "object": "https://chatty.example/ben/p/51086"
}</code></pre>

</section>

<section data-markdown>

<pre><code>{
    "@context": "https://www.w3.org/ns/activitystreams",
    "type": "Follow",
    "id": "https://social.example/alyssa/follow/12344bx3",
    "to": ["https://chatty.example/ben/"],
    "actor": "https://social.example/alyssa/",
    "object": "https://chatty.example/ben/"
}</code></pre>

</section>