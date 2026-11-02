#!/usr/bin/env bash
# Immowelt Property API – cURL example
# Usage: PILOTERR_API_KEY=your-key ./property.sh
set -euo pipefail

curl -sS --fail-with-body -G "https://api.piloterr.com/v2/immowelt/property" \
  -H "x-api-key: ${PILOTERR_API_KEY}" \
  --data-urlencode query=https://www.immowelt.de/expose/65de0309-bf41-48ce-86fd-6a3441fd0487
