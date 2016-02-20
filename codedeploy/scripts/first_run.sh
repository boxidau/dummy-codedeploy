#!/bin/bash

# This is used to cleanup before an initial deploy
target=/opt/codedeploy-agent/deployment-root/deployment-instructions
if find "$target" -mindepth 1 -print -quit | grep -q .; then
    echo "Deploys have occured here before, skipping initial run tasks"
else
    echo "Initial Deploy"
fi
