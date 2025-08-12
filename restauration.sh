#!/usr/bin/env bash
set -euo pipefail

# --- CONFIG ---
MYSQL_USER="admin"
MYSQL_PASS="emriHy22%"
DB="flashculture"
DIR="/var/www/html/bia2026/moodlesql"
REPO="/var/www/html/bia2026"

# --- RÉCUPÈRE LE DERNIER COMMIT ---
if [ -d "$REPO/.git" ]; then
  cd "$REPO"
  git pull --rebase || true
  LAST_COMMIT="$(git rev-parse --short HEAD || echo 'inconnu')"
else
  echo "❌ Répertoire Git introuvable: $REPO"
  exit 1
fi

# --- TROUVER LE DERNIER DUMP ---
LATEST_DUMP="$(ls -1t "${DIR}/${DB}_"*.sql.gz 2>/dev/null | head -n 1 || true)"
if [ -z "${LATEST_DUMP}" ]; then
  echo "❌ Aucun dump trouvé dans ${DIR} pour ${DB} (pattern: ${DB}_*.sql.gz)"
  exit 1
fi

echo "ℹ️ Dernier commit: ${LAST_COMMIT}"
echo "ℹ️ Dump sélectionné: ${LATEST_DUMP}"

# --- CONFIRMATION NON-INTERACTIVE (désactivée) ---
# Si tu veux une confirmation interactive, décommente ce bloc :
# read -r -p "Cette opération VA ÉCRASER la base '${DB}'. Continuer ? (oui/N) " ans
# [ "${ans:-N}" = "oui" ] || { echo "Opération annulée."; exit 1; }

# --- DROP & RECREATE DB (DESTRUCTIF) ---
echo "🧹 Suppression puis recréation de la base ${DB}..."
mysql -u"$MYSQL_USER" -p"$MYSQL_PASS" -e "DROP DATABASE IF EXISTS \\\`${DB}\\\`; CREATE DATABASE \\\`${DB}\\\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# --- RESTAURATION ---
echo "📦 Restauration en cours..."
gunzip -c "$LATEST_DUMP" | mysql -u"$MYSQL_USER" -p"$MYSQL_PASS" "$DB"

echo "✅ Restauration terminée depuis: $LATEST_DUMP (commit ${LAST_COMMIT})"
