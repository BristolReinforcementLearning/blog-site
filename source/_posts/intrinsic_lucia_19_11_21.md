---
title: 'Adversarial Intrinsic Motivation for Reinforcement
Learning'
date: 2021-11-19
author: Lucia Cipolina Kun
tags:
  - intrinsic-motivation
  - sparse-rewards
---
This [paper](https://arxiv.org/pdf/2105.13345.pdf) was published at NeurIps 2021.

1. The paper deals with the problem of sparse rewards in Reinforcement Learning. For this, they convert the learning problem into a distribution-matching problem. In this way, they obtain a coarser reward signal.
1. The target goal is drawn from a distribution of goals. The states are also drawn from a distribution of available states given the current state. The key idea is to match the distribution of states with that of the goals.
1. The paper uses the Wasserstein to measure distance between both distributions and proposes a new metric to work with MDP-based probabilities. 
1. They show superior results on grid environments.