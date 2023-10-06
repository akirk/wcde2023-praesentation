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

<pre><code><entry xmlns="http://www.w3.org/2005/Atom"
    xmlns:activity="http://activitystrea.ms/spec/1.0/">
  <id>tag:photopanic.example.com,2009:activity/4859/4352</id>
  <title>Geraldine posted a Photo on PhotoPanic</title>
  <link rel="alternate" type="text/html" href="http://example.com/..." />
  <activity:verb>post</activity:verb>
  <activity:object>
    <id>tag:photopanic.example.com,2009:photo/4352</id>
    <title>My Cat</title>
    <published>2009-11-02T15:29:00Z</published>
    <link rel="alternate" type="text/html" href="http://example.com/..." />
    <activity:object-type>photo</activity:object-type>
  </activity:object>
  <content type="html">...</content>
</entry></code></pre>

</section>

<section data-markdown>

<pre><code class="json">{
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

<pre><code class="json">{
    "@context": "https://www.w3.org/ns/activitystreams",
    "type": "Like",
    "id": "https://social.example/alyssa/posts/5312e10e",
    "to": ["https://chatty.example/ben/"],
    "actor": "https://social.example/alyssa/",
    "object": "https://chatty.example/ben/p/51086"
}</code></pre>

</section>

<section data-markdown>

<pre><code class="json">{
    "@context": "https://www.w3.org/ns/activitystreams",
    "type": "Follow",
    "id": "https://social.example/alyssa/follow/12344bx3",
    "to": ["https://chatty.example/ben/"],
    "actor": "https://social.example/alyssa/",
    "object": "https://chatty.example/ben/"
}</code></pre>

</section>

<section data-markdown>

# Pub

</section>