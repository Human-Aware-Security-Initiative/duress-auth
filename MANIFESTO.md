# DuressAuth Manifesto

## What if the person is no longer there?

Modern authentication answers a simple question:

> Is the right user in front of us?

DuressAuth starts with a different question:

> What if the right user is no longer free?

The password may be right.

The PIN may be right.

Biometrics may work.

The token may be real.

The session may look legitimate.

And yet the system can still be wrong.

Because authentication confirms the person, but it does not confirm the circumstances.

## The Problem

Most digital systems assume that the user:

* is alive;

* is conscious;

* is free;

* is not under duress;

* is in control of the device;

* is acting in his or her own best interests.

It’s a convenient assumption.

But it’s not always true.

A person can be forced to enter a password.
A person can be forced to put their finger on the sensor.
A person can be held next to a phone while their accounts are emptied.
A person can be unconscious.
A person can no longer exist.
In such cases, a normal system sees only one thing:

> Login successful.

And this is where the failure begins.

## Idea

DuressAuth is an approach to building systems that distinguish not only the result of authentication, but also the possible circumstances of the login.

The system should not blindly believe every successful login.

It should be able to say:

> Yes, this is the right user.

> But, maybe something is wrong.

## Principles

### 1. Authentication does not equal security

A correct password does not mean a secure situation.

### 2. Biometrics are convenience, not absolute protection

A person’s body should not become a universal key to their entire life.

### 3. The system should take duress into account

Duress is not exotic. It is a real class of threats.

### 4. A successful login can be suspicious

Sometimes, the correct PIN is a signal of danger.

### 5. The reaction should be imperceptible

If the user is under duress, the system should not betray his actions to the attacker.

### 6. Safe mode is better than denial

In some scenarios, the system should not block the login explicitly. It can open a limited, controlled, secure interface.

### 7. Events should be logged

Each duress scenario should leave an audit trail: time, context, risk, system reaction.

### 8. Architecture should be framework-independent

DuressAuth is not a Symfony Bundle or a Laravel package.

It is a security concept that can have adapters for different technologies.

## What DuressAuth does

DuressAuth allows the system to:

* recognize a regular PIN;

* recognize an alarm PIN;
* open a safe mode;
* generate a security event;
* send a silent alert;
* block sensitive actions;
* lower the trust level of the session;
* integrate with a policy engine, risk engine, queue, audit log or notification system.

## What DuressAuth does not promise

DuressAuth does not promise to defeat violence.

DuressAuth does not guarantee physical safety of a person.

DuressAuth is not magic.

DuressAuth does not replace the police, the bank, the law, cryptography, 2FA or common sense.

It's just a tool that allows software to stop being naive.

## Key phrase

> Authentication proves identity.
> Duress Authentication questions the circumstances.

## Project goal

The goal of DuressAuth is to create an open, portable, framework-independent framework for systems that take duress, risk, and human context into account when authenticating.

We don't just want to build more secure systems.

We want to build systems that remember that behind every token, session, password, and key is a human.

Sometimes that human is silent.

Sometimes they can't tell the truth.

Sometimes the only message they can give the system is a correct, but different PIN.

DuressAuth exists for that moment.
