# Installation

This plugins is based on the qbehaviour_studentfeedbackdeferred plugin, and needs it to be installed.

# Description

With this question behavior, students can submit for each response given in the Quiz their degree of certainty (DC) that their answer will be judged correct. A mixed scale with 6 DC is used, associating percentages and text.  
Here is an example for a True/False question:  
![A true/false question with fields to indicate the certainty](metadata/screenshots/question.png)

After the Quiz, the results are presented using a color code according to the combination of the answer (correct / incorrect) and the degree of certainty:  
![Five categories of answers depending on the certainty and correctness](metadata/screenshots/categories.png)

The report page that is displayed (and that remains available for review) contains:  
- a summary of the results that is given in form of a histogram:  
![Histogram at the end of the quiz](metadata/screenshots/quiz_feedback.png)  
- detailed feedback for each question using the same color code:  
![Specific feedback for a question, indicating the answer category](metadata/screenshots/question_feedback.png)

Like the qbehaviour_studentfeedbackdeferred plugin, this plugin also integrates the possibility for the learner to enter metacognitive comments, at two levels:  
- just below the histogram (see screenshot above) to leave an overall metacognitive comment,  
- after each detailed feedback, question by question (see screenshot above), to leave a metacognitive explanation about their answer.

## Important note

Please note that the provided certainty levels have **no impact** on the mark given for each answer, and is not planned to do so in any future version.  
This plugin's goal is to allow learners to give metacognitive information about their answers, and not be evaluated on them.  
Whether you choose to include this information in your evaluations or not is at your discretion.

# Setup

Once installed, simply go to a Quiz settings > Question behaviour > Select "Certainty with student feedback (deferred)".

# Related plugins
## Immediate feedback version

This plugin also exists in "immediate feedback" version. See the qbehaviour_certaintywithstudentfeedback plugin.

## Quiz report

Students feedback and certainty can be viewed within the quiz report interface using the quiz_certainty plugin.

# About

This software was developed with the Caseine project, with the support of the following organizations:  
- Université Grenoble Alpes  
- Institut Polytechnique de Grenoble

Contributors:
- Astor Bizard (developer and maintainer)
- Julien Douady & Christian Hoffmann (original idea, concept and review)