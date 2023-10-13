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

<section>

Learning from the lessons of TCP/IP, Tim Berners-Lee made sure to keep the individual parts of the system as simple as possible (but no simpler). The World Wide Web didn’t succeed because the technology was the best; far from it. It succeeded because the technology was just simple enough—but also powerful enough—for people to get started with straight away.

Think about it. The first person to own a telephone had a completely useless object. As soon as one other person had a telephone, it suddenly become exponentially more useful. That was the challenge facing the creator of a new protocol at the start of the 90s: that protocol was HTTP—the HyperText Transfer Protocol.

https://adactio.com/articles/10887

</section>