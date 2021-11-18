---
title: 'Beyond Pick-and-Place: Tackling Robotic Stacking of Diverse Shapes'
date: 2021-11-11
author: Mihai Anca
tags:
  - offline
  - vision
  - imitation
---
This [paper](https://openreview.net/forum?id=U0Q8CrtBJxJ) was published at CoRL 2021.

1. Vision-based offline RL for stacking differently shaped objects and then doing sim-to-real
1. Using a 4-DOF arm
1. New benchmark set called RGB-stacking introducing 152 procedurally-generated shapes that can be 3D printed
1. Two types of tasks: 3 objects (where 2 must be stacked) involving 5 different configs and generalization over 103 different shapes with zero-shot transfer on other 40.
1. Training in 3 stages: 1. multiple RL agents from states, 2. imitation learning on the previously trained agent and image data, and 3. fine-tuning on data gathered with the real robot
1. Using embeddings (1 hot vector/parameters) to suggest which task/config is currently in play
1. First stage: MPO algorithm. Second stage: DAgger-style interactive imitation learning + domain randomization. Third stage: deploy on real robot, collect samples, train offline, redeploy. Using CRR-IMP - critic regularized regression - no idea what this is
1. They call it zero-shot transfer, but it's not.
1. Architecture is massive for this task: Encoder + ResNet + Transformer + ResNet
