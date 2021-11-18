---
title: 'Multi-Agent Reinforcement Learning for Active Voltage Control on Power Distribution networks'
date: 2021-11-09
author: Jonathan D Thomas
tags:
  - multi-agent
  - control
  - POMDP
---
This [paper](https://arxiv.org/abs/2110.14300) considers the application of MARL to Active Voltage Control. They suggest that the introduction of high numbers of distributed photovoltaics (PV) in Power Networks can lead to significant voltage fluctuations which can be undesirable from a regulatory perspective.

•They model the problem as a Dec-POMDP, where each PV is an agent which can decide if it is accepting or rejecting power based on some local and regional observations. The aim being to limit these fluctuations. They define multiple reward functions and comment that a bell shape similar to that proposed by Bellamare et al on Statospheric balloons is effective.

•They try several algorithms including IDDPG, MADDPG, COMA, IPPO, MAPPO, SQDDPG and MATD3. MADDPG performs best but does not significantly outperform standard approaches introduced in the literature review. Droop specifically.

•It is a really honest paper which is super cool to see.

