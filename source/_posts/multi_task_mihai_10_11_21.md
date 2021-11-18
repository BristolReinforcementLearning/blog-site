---
title: 'Efficiently Identifying Task Groupings for Multi-Task Learning'
date: 2021-11-10
author: Mihai Anca
tags:
  - multi-task
---
This [paper](https://arxiv.org/pdf/2109.04617.pdf) was published at NeurIps 2021.

1. General multi-task learning (not just RL)
1. Grouping tasks that benefit from training together during train time
1. 10% increase in loss (not that much), but much faster (11x) than anything else out there doing similar things
1. You train twice because you 1. first train one model on all tasks, calculating the inter-dependencies, then 2. train different models for each task
1. The new networks are calculated such that their combined memory requirements are less than or equal to the initial big network
1. Assumes all tasks are equally important but their model generalizes to other cases as well
1. It works like this: calculate the loss for all tasks except task i. Train on task i. Recalculate loss for all tasks except task i. The 'affinity' is calculated as 1-(ratio of after/before). This is averaged over a larger number of steps.
1. Selecting groups: maximize inter-affinity between 2 or more tasks. I didn't fully understand how it works for 3+ tasks
experiments are super good! They look at how inter-affinity fluctuates over time, if calculating it every step is worth it, how train loss compares to validation loss when it comes to affinity calculation and if hyperparameters affect grouping (it does!).
1. Really good paper!
