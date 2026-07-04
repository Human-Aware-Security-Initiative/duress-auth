# The Human-Aware Security Initiative (Zigr\OpenAI\DuressAuth)

> *"Security doesn't start when everything is good. It starts when the worst has already happened."*

> **Security should authenticate people, not merely credentials.**

Almost all modern cybersecurity is built on a simple assumption: the owner of the system is alive, free, and in control of his actions.

But the world is not obligated to live up to our assumptions.

People are kidnapped. People are forced to give up their passwords. People are forced to put their fingers to a sensor. People disappear. Sometimes they can no longer say a word, but their phones, tokens, and banking apps are still valuable to those who came after them.

At that point, most security systems stop being security systems.

They become just obedient command executioners.

DuressAuth is an attempt to ask an uncomfortable question.

What should a system do if authentication is successful... but success itself no longer proves anything?

We are not trying to defeat death.

We're not trying to defeat violence.
We're not even trying to make the user invulnerable.

We just want software to stop being naive.

So that it can learn to doubt.

So that there's a way to silently say:

> "I'm logged in. But that's not really me anymore."

DuressAuth is an open source PHP library built around the concept of **duress authentication**.

It allows an application to behave differently depending on the login context: open normal mode, switch to a secure restricted interface, silently raise a security event, notify a trusted person, or integrate with any other response system.

This project is not about fear.

It's about how even in the darkest scenarios, software architecture can remain human.

Sometimes, the only thing an application can do is understand that silence is also a message.
