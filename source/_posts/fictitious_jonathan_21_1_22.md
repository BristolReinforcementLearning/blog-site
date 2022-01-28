---
title: 'Collaborating with Humans without Human Data'
date: 2022-01-21
author: Jonathan David Thomas
tags:
  - multi-agent
---
This [paper](https://arxiv.org/abs/2110.08176) was discussed during the 21/1/2022 session.

Proposes a method called Fictitious co-play (FCP), which involves training a population of agents by self-play (including a number of checkpoints) and then using this diverse population to train one FCP agent. The purpose of this is to generate an agent that can adapt to any partner despite problem symmetries and partner skill. This agent is shown to perform well in a large scale human evaluation.