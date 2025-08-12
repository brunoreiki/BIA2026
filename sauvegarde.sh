#!/usr/bin/env bash
set -euo pipefail

# Identifiants MySQL
MYSQL_USER="admin"
MYSQL_PASS="emriHy22%"

# Base à sauvegarder
DB="flashculture"

# Dossier de sauvegarde
DIR="/var/www/html/bia2026/moodlesql"

# Date/heure pour le nom de fichier
STAMP="$(date +'%Y-%m-%d_%Hh%Mm%Ss')"
FILE="${DIR}/${DB}_${STAMP}.sql.gz"

# Création du dossier si nécessaire
# mkdir -p "$DIR"

# Dump compressé
mysqldump --single-transaction --quick --routines --triggers --events \
  --default-character-set=utf8mb4 \
  -u"$MYSQL_USER" -p"$MYSQL_PASS" "$DB" \
| gzip > "$FILE"

# Permissions
# chown root:root "$FILE"
# chmod 600 "$FILE"

# Rotation : suppression des dumps plus vieux que 14 jours
find "$DIR" -name "${DB}_*.sql.gz" -type f -mtime +14 -delete

echo "✅ Sauvegarde terminée : $FILE"
