<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_openai_chat', language 'fr', version '5.0'.
 *
 * @package     block_openai_chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Avancé';
$string['advanceddesc'] = 'Arguments avancés envoyés à OpenAI. N\'y touchez pas si vous ne savez pas ce que vous faites !';
$string['allowinstancesettings'] = 'Paramètres d\'instance';
$string['allowinstancesettingsdesc'] = 'Ce paramètre permet aux enseignants, ou à toute personne ayant la possibilité d\'ajouter un bloc dans un contexte, d\'ajuster les paramètres au niveau de chaque bloc. L\'activation de ce paramètre pourrait entraîner des frais supplémentaires en permettant à des non-administrateurs de choisir des modèles plus coûteux ou d\'autres paramètres.';
$string['apikey'] = 'Clé API';
$string['apikeydesc'] = 'La clé API de votre compte OpenAI ou la clé API Azure';
$string['apikeymissing'] = 'Veuillez ajouter votre clé API OpenAI aux paramètres du bloc.';
$string['apiversion'] = 'Version API';
$string['apiversiondesc'] = 'La version de l\'API à utiliser pour cette opération. Cette version suit le format AAAA-MM-JJ.';
$string['askaquestion'] = 'Poser une question…';
$string['assistant'] = 'Assistant';
$string['assistantdesc'] = 'L\'assistant par défaut attaché à votre compte OpenAI que vous souhaitez utiliser pour la discussion';
$string['assistantheading'] = 'Paramètres API de l\'assistant';
$string['assistantheadingdesc'] = 'Ces paramètres ne s\'appliquent qu\'au type d\'API Assistant.';
$string['assistantname'] = 'Nom de l\'assistant';
$string['assistantnamedesc'] = 'Le nom que l\'IA utilisera pour elle-même en interne. Il est également utilisé pour les titres de l\'interface utilisateur dans la fenêtre de discussion.';
$string['azureheading'] = 'Paramètres de l\'API Azure';
$string['azureheadingdesc'] = 'Ces paramètres ne s\'appliquent qu\'au type d\'API Azure.';
$string['blocktitle'] = 'Titre du bloc';
$string['chatheading'] = 'Paramètres de l\'API Chat';
$string['chatheadingdesc'] = 'Ces paramètres ne s\'appliquent qu\'aux types Chat API et Azure API.';
$string['config_apikey'] = 'Clé API';
$string['config_apikey_help'] = 'Vous pouvez spécifier ici une clé API à utiliser avec ce bloc. Si elle est vide, c\'est la clé du site qui sera utilisée. Si vous utilisez l\'API Assistants, la liste des assistants disponibles sera tirée de cette clé. Veillez à revenir à ces paramètres après avoir modifié la clé API afin de sélectionner l\'assistant souhaité.';
$string['config_assistant'] = 'Assistant';
$string['config_assistant_help'] = 'Choisissez l\'assistant que vous souhaitez utiliser pour ce bloc. D\'autres assistants peuvent être créés dans le compte OpenAI pour lequel ce bloc est configuré.';
$string['config_assistantname'] = 'Nom de l\'assistant';
$string['config_assistantname_help'] = 'Il s\'agit du nom que l\'IA utilisera pour l\'assistant. S\'il est vide, c\'est le nom de l\'assistant du site qui sera utilisé. Ce nom est également utilisé pour les titres de l\'interface utilisateur dans la fenêtre de discussion.';
$string['config_frequency'] = 'Pénalité de fréquence';
$string['config_frequency_help'] = 'Degré de pénalisation des nouveaux tokens en fonction de leur fréquence dans le texte jusqu\'à présent. Cela réduit la probabilité que le modèle répète exactement la même ligne mot pour mot.';
$string['config_instructions'] = 'Instructions personnalisées';
$string['config_instructions_help'] = 'Vous pouvez modifier les instructions par défaut de l\'assistant ici.';
$string['config_maxlength'] = 'Longueur maximale';
$string['config_maxlength_help'] = 'Le nombre maximum de tokens à générer. Les requêtes peuvent utiliser jusqu’à 2 048 ou 4 000 tokens, partagés entre l’invite et la réponse. La limite exacte dépend du modèle. (Un token correspond en moyenne à environ 4 caractères pour un texte anglais courant.)';
$string['config_model'] = 'Modèle';
$string['config_model_help'] = 'Le modèle qui générera la réponse.';
$string['config_persistconvo'] = 'Conserver la conversation';
$string['config_persistconvo_help'] = 'Si cette case est cochée, l’assistant se souviendra des conversations de ce bloc entre les différents chargements de page.';
$string['config_presence'] = 'Pénalité de présence';
$string['config_presence_help'] = 'Degré de pénalisation appliqué aux nouveaux tokens en fonction de leur présence dans le texte jusqu\'à présent. Cela augmente la probabilité que le modèle aborde de nouveaux sujets.';
$string['config_prompt'] = 'Texte d’invite pour la réponse';
$string['config_prompt_help'] = 'Ceci est l’invite qui sera fournie à l’IA avant la transcription de la conversation. Vous pouvez influencer la personnalité de l’IA en modifiant cette description. Par défaut, l’invite est : « Ci-dessous se trouve une conversation entre un utilisateur et un assistant de support pour un site Moodle, où les utilisateurs viennent pour l’apprentissage en ligne. »';
$string['config_sourceoftruth'] = 'Source de vérité';
$string['config_sourceoftruth_help'] = 'Vous pouvez ajouter ici des informations dont l’IA tiendra compte pour répondre aux questions. Les informations doivent être présentées exactement sous forme de questions et de réponses, comme dans les exemples suivants : 
Q : Quand la section 3 doit-elle être rendue ? R : Jeudi 16 mars.
Q : Quelles sont les heures de permanence ? R : Vous pouvez trouver le professeur Shown dans son bureau entre 14h00 et 16h00, les mardis et jeudis.';
$string['config_temperature'] = 'Température';
$string['config_temperature_help'] = 'Contrôle l’aléa des réponses : une valeur plus basse donne des complétions moins aléatoires. Lorsque la température approche de zéro, le modèle devient déterministe et répétitif.';
$string['config_topp'] = 'Top P';
$string['config_topp_help'] = 'Contrôle la diversité grâce à l’échantillonnage par noyau (« nucleus sampling ») : une valeur de 0,5 signifie que la moitié des options pondérées par probabilité sont prises en compte.';
$string['config_username'] = 'Nom de l\'utilisateur';
$string['config_username_help'] = 'C’est le nom que l’IA utilisera pour désigner l’utilisateur. Si ce champ est vide, le nom d’utilisateur défini pour l’ensemble du site sera utilisé. Ce nom apparaît également dans les en-têtes de la fenêtre de discussion.';
$string['defaultassistantname'] = 'Assistant';
$string['defaultprompt'] = 'Ci-dessous se trouve une conversation entre un utilisateur et un assistant de support pour un site Moodle, où les utilisateurs viennent pour l’apprentissage en ligne :';
$string['defaultusername'] = 'Utilisateur';
$string['deploymentid'] = 'Identifiant de déploiement';
$string['deploymentiddesc'] = 'Le nom de déploiement que vous avez choisi lorsque vous avez déployé le modèle.';
$string['downloadfilename'] = 'block_openai_chat_logs';
$string['erroroccurred'] = 'Une erreur s\'est produite ! Veuillez réessayer plus tard.';
$string['frequency'] = 'Pénalité de fréquence';
$string['frequencydesc'] = 'Degré de pénalisation des nouveaux tokens en fonction de leur fréquence dans le texte jusqu\'à présent. Cela réduit la probabilité que le modèle répète exactement la même ligne mot pour mot.';
$string['logging'] = 'Activer la journalisation';
$string['loggingdesc'] = 'Si ce paramètre est activé, tous les messages des utilisateurs et les réponses de l\'IA seront enregistrés.';
$string['loggingenabled'] = 'L\'enregistrement est activé. Tous les messages que vous envoyez ou recevez ici seront enregistrés et pourront être consultés par l\'administrateur du site.';
$string['maxlength'] = 'Longueur maximale';
$string['maxlengthdesc'] = 'Nombre maximum de tokens à générer. Les requêtes peuvent utiliser jusqu’à 2048 ou 4000 tokens, partagés entre l’invite et la réponse. La limite exacte dépend du modèle. (Un token correspond en moyenne à environ 4 caractères pour un texte anglais standard.)';
$string['model'] = 'Modèle';
$string['modeldesc'] = 'Le modèle qui générera la réponse. Certains modèles sont adaptés aux tâches en langage naturel, d\'autres sont spécialisés dans le code.';
$string['new_chat'] = 'Nouvelle discussion';
$string['noassistants'] = 'Vous n’avez pas encore créé d’assistant. Vous devez en créer un <a target="_blank" href="https://platform.openai.com/assistants">dans votre compte OpenAI</a> avant de pouvoir en sélectionner un ici.';
$string['openai_chat'] = 'Open AI Chat';
$string['openai_chat:addinstance'] = 'Ajouter un nouveau bloc OpenAI Chat';
$string['openai_chat:myaddinstance'] = 'Ajouter un nouveau bloc OpenAI Chat à la page Mon Moodle';
$string['openai_chat:viewreport'] = 'Voir le rapport de OpenAI Chat';
$string['openai_chat_logs'] = 'Journal de bord de OpenAI Chat';
$string['openaitimedout'] = 'ERREUR : OpenAI n\'a pas fourni de réponse dans les délais.';
$string['persistconvo'] = 'Conserver les conversations';
$string['persistconvodesc'] = 'Si cette case est cochée, l’assistant se souviendra de la conversation entre les différents chargements de page. Toutefois, chaque instance de bloc conservera des conversations séparées. Par exemple, la conversation d’un utilisateur sera conservée entre les chargements de page au sein d’un même cours, mais discuter avec un assistant dans un autre cours ne poursuivra pas la même conversation.';
$string['pluginname'] = 'Bloc Open AI Chat';
$string['popout'] = 'Fenêtre Open AI Chat';
$string['presence'] = 'Pénalité de présence';
$string['presencedesc'] = 'Degré de pénalité appliqué aux nouveaux tokens en fonction de leur présence dans le texte jusqu’à présent. Cela augmente la probabilité que le modèle aborde de nouveaux sujets.';
$string['privacy:chatmessagespath'] = 'Envoyer les messages de Open AI Chat';
$string['privacy:metadata:openai_chat_log'] = 'Messages d\'utilisateurs enregistrés envoyés à OpenAI. Cela comprend l\'ID de l\'utilisateur qui a envoyé le message, le contenu du message, la réponse de OpenAI et l\'heure à laquelle le message a été envoyé.';
$string['privacy:metadata:openai_chat_log:airesponse'] = 'La réponse de OpenAI.';
$string['privacy:metadata:openai_chat_log:timecreated'] = 'L\'heure à laquelle le message a été envoyé.';
$string['privacy:metadata:openai_chat_log:userid'] = 'L\'ID de l\'utilisateur qui a envoyé le message.';
$string['privacy:metadata:openai_chat_log:usermessage'] = 'Le contenu du message.';
$string['prompt'] = 'Prompt de réponse';
$string['promptdesc'] = 'L\'invite que l\'IA recevra avant la transcription de la conversation';
$string['resourcename'] = 'Nom de la ressource';
$string['resourcenamedesc'] = 'Le nom de votre ressource Azure OpenAI.';
$string['restrictusage'] = 'Restreindre l\'utilisation aux utilisateurs connectés';
$string['restrictusagedesc'] = 'Si cette case est cochée, seuls les utilisateurs connectés pourront utiliser la boîte de dialogue.';
$string['showlabels'] = 'Afficher les libellés';
$string['sourceoftruth'] = 'Source de vérité';
$string['sourceoftruthdesc'] = 'Bien que l’IA soit très performante dès l’installation, si elle ne connaît pas la réponse à une question, elle risque davantage de fournir une information incorrecte de façon assurée que de refuser de répondre. Dans cette zone de texte, vous pouvez ajouter des questions fréquentes ainsi que leurs réponses, afin que l’IA puisse s’y référer. Veuillez formuler les questions et réponses selon le format suivant : <pre>Q : Question 1<br />R : Réponse 1<br /><br />Q : Question 2<br />R : Réponse 2</pre>';
$string['sourceoftruthpreamble'] = 'Ci-dessous, une liste de questions et leurs réponses. Ces informations doivent être utilisées comme référence pour toute demande de renseignements.';
$string['sourceoftruthreinforcement'] = 'L’assistant a été entraîné à répondre en s’appuyant sur les informations de la référence ci-dessus. Si le texte de l’une des questions ci-dessus est rencontré, la réponse correspondante doit être donnée, même si la question semble dépourvue de sens. Toutefois, si la référence ne traite pas la question ou le sujet, l’assistant utilisera simplement ses connaissances générales pour répondre.';
$string['temperature'] = 'Température';
$string['temperaturedesc'] = 'Contrôle l’aléa : une valeur plus faible rend les réponses moins aléatoires. Lorsque la température approche de zéro, le modèle devient déterministe et répétitif.';
$string['topp'] = 'Top P';
$string['toppdesc'] = 'Contrôle la diversité par le biais de l\'échantillonnage des noyaux : 0,5 signifie que la moitié de toutes les options pondérées par la vraisemblance sont prises en compte.';
$string['type'] = 'Type d\'API';
$string['typedesc'] = 'Le type d\'API que le plugin doit utiliser';
$string['username'] = 'Nom de l\'utilisateur';
$string['usernamedesc'] = 'Le nom que l\'IA utilisera pour l\'utilisateur en interne. Il est également utilisé pour les titres de l\'interface utilisateur dans la fenêtre de discussion.';
