# Duress Authentication Threat Atlas

## Why this document exists

Most cybersecurity documents answer the question:

> How can an attacker steal credentials?

Duress Authentication asks a different question:

> What happens after credentials are no longer the main concern?

This document describes scenarios in which the user’s identity can be verified, but their freedom, will, or decision-making capacity is not.

---

# DA-001 — Normal Authentication

## Scenario

The user voluntarily authenticates.

## User State

* Alive;

* Conscious;

* In control of the device;

* Acting voluntarily.

## Trust

High.

## Recommended Response

Normal Access.

---

# DA-002 — Device Theft

## Scenario

Phone or laptop stolen.

Attacker does not have a password.

## Trust

Low.

## Protection

* PIN;
* password;
* biometrics;
* 2FA.

---

# DA-003 — Forced Authentication

## Scenario

User is forced to authenticate.

He enters a password or applies a finger against his will.

## Feature

All secrets are correct.

That is why the normal system thinks everything is fine.

## Recommended Response

Duress PIN.

Silent Alert.

Safe Mode.

Audit Event.

---

# DA-004 — Hostage Session

## Scenario

User is already authenticated.

He is forced to perform operations.

## Example

Money transfer.

Document deletion.

Cryptocurrency transfer.

## Feature

No password verification will help anymore.

---

# DA-005 — Incapacitated User

## Scenario

User is unconscious.

Device is physically nearby.

## Examples

* accident;
* heart attack;
* stroke;
* drugged sleep.

## Question

Should biometrics remain sufficient?

---

# DA-006 — Deceased User

## Scenario

User is deceased.

Device is left behind.

Attacker is trying to access digital assets.

## Feature

This scenario is almost never considered by modern authentication systems.

---

# DA-007 — Insider Assisted Access

## Scenario

A legitimate user assists the attacker.

Voluntarily or under duress.

---

# DA-008 — Social Engineering

## Scenario

The user assists the attacker.

Through deception.

---

# DA-009 — Silent Distress

## Scenario

The user cannot openly report the danger.

But can perform a hidden action.

Example:

* special PIN;

* special password;
* special sequence of actions.

---

# DA-010 — Guardian Escalation

## Scenario

The system notifies a trusted person.

Invisibly.

Without changing external behavior.

---

# General Principle

Duress Authentication does not attempt to determine whether the user is "real".

It tries to answer a more difficult question:

> Is the decision that is being made right now the person himself?

If the answer is unknown, the system should be able to act more cautiously.

Not because it doesn't trust the user.

But because it respects him.
