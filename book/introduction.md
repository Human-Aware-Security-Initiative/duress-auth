# The Wrong Question. Or Introducing DuressAuth

> **Software should authenticate people, but protect humans.**

---

> **Програмне забезпечення повинно автентифікувати особу, але захищати людину.**

## Authentication was designed to prove identity.

**DuressAuth** asks a different question.

> **What if the identity is correct, but the circumstances are not?**

For decades, authentication has evolved around passwords, biometrics, multi-factor authentication, hardware tokens, passkeys, and cryptographic proofs.

These technologies answer one fundamental question:

> **Is this the legitimate user?**

DuressAuth begins where traditional authentication ends.

It explores scenarios in which the user is authentic—but no longer free.

---

## A Different Threat Model

Modern systems assume that the authenticated user:

* is alive;
* is conscious;
* controls the device;
* acts voluntarily;
* is able to make independent decisions.

These assumptions are often reasonable.

They are not always true.

DuressAuth introduces a new security perspective by addressing situations such as:

* authentication under coercion;
* hostage scenarios;
* forced biometric authentication;
* device theft after successful authentication;
* compromised authenticated sessions;
* silent distress signaling;
* loss of user autonomy;
* emergency safe mode activation;
* guardian notifications;
* controlled access under uncertainty.

---

## Core Principles

DuressAuth does **not** replace existing authentication.

It complements it.

Authentication confirms identity.

DuressAuth evaluates confidence in the context of that identity.

Instead of treating authentication as a binary decision, it introduces adaptive trust levels and policy-driven responses.

---

## Possible Features

Depending on the application, DuressAuth may provide:

* Duress PINs
* Silent alerts
* Safe Mode dashboards
* Context-aware authentication
* Trust scoring
* Risk escalation policies
* Guardian contact notifications
* Audit event generation
* Session confidence levels
* Sensitive operation blocking
* Progressive authorization
* Adaptive access control
* Framework-independent architecture
* Symfony integration
* Laravel integration
* API Platform integration
* REST API support
* Event-driven architecture
* Messenger/Queue integration
* Webhook notifications
* Email notifications
* Telegram notifications
* Custom policy engines
* SIEM integration
* Audit trail generation
* Extensible adapters
* Portable PHP core

---

## Architecture First

DuressAuth is built around a framework-independent core.

The same concepts can be implemented in:

* PHP
* Symfony
* Laravel
* Go
* Python
* Java
* Rust
* .NET

The framework is an implementation detail.

The security model is the product.

---

## Beyond Authentication

DuressAuth is more than a PHP package.

It is an open specification for **Human-Aware Security**.

Its purpose is not merely to authenticate credentials.

Its purpose is to help software recognize when successful authentication may no longer be sufficient.

---

## Vision

One day, authentication systems may routinely ask not only:

> "Is this the right user?"

but also:

> "Is this user acting freely?"

That question defines the future we want to build.

Welcome to **DuressAuth**.

Where authentication meets human reality.
