---
title: 'The Sensory Neuron as a Transformer: Permutation-Invariant Neural Networks for Reinforcement Learning'
date: 2021-11-19
author: Mihai Anca
tags:
  - architecture
---
This [paper](https://attentionneuron.github.io/) was published at NeurIps 2021.

1. new architecture introduced: splits input into chunks which is fed to self-organising neurons
1. self-organising neurons: each 'neuron' is actually a small NN and the outputs are agreggated using a transformer-like method
1. trained models can quickly adapt to a change in input order
1. can even deal with different inputs: instead of x, you pass derivative of x, or you completly shuffle chunks of an image
1. it was tested on many environments including: Ant, Pong, Cartpole and CarRacing
1. increases in training time and memory requirements not discussed
1. needs a more careful read, but it sounds promising!