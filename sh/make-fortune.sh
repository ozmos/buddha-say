#!/usr/bin/env bash
cat dhammapada-fortune/* > dhammapada-all
strfile -c % dhammapada-all dhammapada-all.dat
sudo cp dhammapada-all.dat /usr/share/games/fortunes/
sudo cp dhammapada-all /usr/share/games/fortunes/
