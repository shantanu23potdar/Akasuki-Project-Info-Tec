Compliance Monitoring and Enforcement through Log Analysis using Large
Language Models (Infosec Engineering) Problem Statement In the face of
increasing data volumes and complex systems, Flipkart encounters the
challenge of ensuring compliance with security policies, standards, and
baselines. To address this issue, this project proposes the development
of a system that leverages large language models for compliance
monitoring and enforcement through log analysis from relevant sources.
The goal is to create a solution that can effectively analyze logs,
system configurations, access controls, and user privileges to identify
compliance breaches with security policies and standards. The project
utilizes the capabilities of large language models (LLMs) to automate
the process of detecting non-compliant activities and providing
actionable insights for remediation.

Solution Attributes The following attributes are the cornerstones of the
Compliance Monitoring and Enforcement system:

Rule Definition: Distilling rules and using provided standards to
establish relationships between rules and parameters in logs and
policies. Flexibility: Building a system capable of handling various log
formats (CSV, text, PDF), rule sets, and compliance standards. The
solution adapts to diverse environments and configurations. Actionable
Insights: Providing relevant and valuable actionable insights to
facilitate effective remediation. System Performance: Ensuring the
system\'s efficiency and scalability to process large volumes of logs
and text data. Adaptability: Developing a system that learns from new
rules, updates compliance standards, and integrates feedback for
continuous improvement without requiring restarts. High
Accuracy/Precision/Recall: Enabling the system to identify compliance
breaches with minimal false positives and exceptionally low false
negatives. User Interface (Optional): Offering a user-friendly interface
for configuring rules, uploading logs and text files, viewing compliance
reports, and accessing actionable insights. Application Workflow The
workflow of the application involves the following steps:

Provide compliance documents as a ruleset alongside logs and system
policies with known non-compliant activities. The system analyzes the
provided data and identifies compliance breaches. The system generates
citations pointing to specific lines, log files, and user IDs associated
with the identified breaches. Actionable insights are presented to guide
users on resolving the detected compliance issues effectively. Technical
Requirements The project\'s technical requirements include:

Utilization of an open-source Large Language Model (LLM). Implementation
of a generic tech stack for automation and parsing. Avoidance of APIs
that transmit data to third-party servers to uphold data privacy and
security.
