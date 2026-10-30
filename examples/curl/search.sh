#!/usr/bin/env bash
# Immowelt Search API – cURL example
# Usage: PILOTERR_API_KEY=your-key ./search.sh
set -euo pipefail

curl -sS -G "https://api.piloterr.com/v2/immowelt/search" \
  -H "x-api-key: ${PILOTERR_API_KEY}" \
  --data-urlencode query=https://www.immowelt.de/suche/mieten/wohnung/deutschland/ad02de1
