---
name: veille-presentation
description: Use when creating, researching, or formatting a technical veille into a concise, clear, visually appealing Marp presentation, with a Hello World example and a topic-appropriate visual design.
---

# Technical Veille Presentation Skill

## Overview

Transform a technical research topic into a clear, concise, and visually appealing Marp presentation saved as `veille-<topic>.md`.

Prioritize:
- Reliable and technically accurate information.
- Clear explanations suitable for the target audience.
- Relevant technical discoveries and developments.
- A simple Hello World example when appropriate.
- A visual style adapted to the topic.

Avoid unnecessary details, repetition, unsupported claims, and overcrowded slides.

---

## When to Use

Use this skill when:
- Researching and presenting a technical topic.
- Creating a *veille technologique*.
- Comparing tools, frameworks, libraries, or technical approaches.
- Explaining a technology's purpose, features, advantages, and limitations.

Do NOT use for:
- Creating a practical lab focused on completing assigned tasks.
- Replacing a lab's required Quick Start section with Hello World.
- Presenting unverified information as fact.

---

## Mandatory Presentation Structure

Every presentation must be delivered as one self-contained Markdown file named `veille-<topic>.md`, with `marp: true`.

### Slide 1: Title

- Display the topic title only.
- Do not include names, student IDs, dates, organization names, or subtitles unless explicitly requested.

### Slide 2: Veille Plan

The plan must contain **exactly these three sections, in this order**:

```markdown
## Veille Plan

1. Introduction
2. Problem
3. Solution
```

Do not add Hello World, Conclusion, or other items to this plan.

### Slide 3: Introduction

- Define the topic in simple terms.
- Explain its purpose and why it matters.
- Introduce the essential concepts.
- Explain the context in which the technology is used.

### Subsequent Slides: Problem

Explain the problem, need, or limitation that makes the technology relevant.

- Describe the problem clearly and concretely.
- Explain who encounters the problem and why it matters, when relevant.
- Use examples or evidence when available.
- Do not invent statistics or claim that a hypothetical problem occurred during implementation.
- For a technology that addresses several problems, focus on the most relevant ones.

### Subsequent Slides: Solution

Explain how the technology addresses the problem.

- Describe its role and how it works at a high level.
- Present only the most relevant features and use cases.
- Explain important advantages and limitations.
- Include a Hello World example when the technology supports a meaningful introductory demonstration.
- Add comparisons or related technologies only when they help explain the solution.
- Do NOT include a "Bonnes Pratiques" (Best Practices) slide in any veille presentation.

### Hello World Requirements

The Hello World example belongs within the **Solution** section; it is not a fourth item in the Veille Plan.

- Explain what the example demonstrates.
- Include the minimum necessary prerequisites or setup.
- Show short, syntactically correct code or commands.
- Specify the language for every fenced code block.
- Explain the expected output or result.
- Keep the example beginner-friendly.
- Never claim the code was executed or tested unless it actually was.

For technologies that do not support a meaningful Hello World example, use a suitable introductory demonstration instead.

### Final Slides: Sources and Key Findings

Within the existing three sections, include reliable sources and key findings where appropriate.

- Prioritize official documentation and trustworthy technical sources.
- Cite or link sources for researched claims.
- Verify information that may change over time.
- Do not add unnecessary sections just to increase the slide count.

---

## Content and Length Rules

1. Present one main idea per slide.
2. Prefer 3–5 concise bullet points per slide.
3. Explain technical terms before relying on them.
4. Adapt explanations to the audience's knowledge level.
5. Prefer facts and examples over vague promotional language.
6. Avoid repeating the same information across slides.
7. Cite reliable sources for researched claims.
8. Distinguish verified facts from opinions and recommendations.
9. Never invent statistics, features, release dates, or sources.
10. Include code only when it helps explain the solution.
11. Do not add slides simply to make the presentation longer.
12. Never add a "Bonnes Pratiques" (Best Practices) slide to any veille presentation.

---

## Design and Formatting Standards

### 1. Marp Configuration

Start with valid Marp frontmatter:

```yaml
---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  /* Add concise, topic-appropriate CSS here */
---
```

Add custom CSS only when it improves readability or reinforces the topic.

### 2. Adapt the Design to the Topic

Do not reuse the same complete visual design for every veille.

Examples:
- Programming languages: syntax-focused design with readable code.
- Frameworks: architecture-inspired layouts and short code examples.
- AI technologies: clean layouts for concepts, capabilities, and limitations.
- Cybersecurity: structured diagrams and clear risk explanations.
- DevOps tools: workflows, pipelines, and technical relationships.
- Web technologies: browser-oriented visuals and concise examples.

These are suggestions, not fixed templates.

Use a coherent palette, readable typography, strong contrast, consistent spacing, and sufficient whitespace. Avoid excessive decoration and mechanically alternating backgrounds.

### 3. Markdown and Code

- Separate slides using `---` on its own line.
- Specify the language for every fenced code block.
- Use tables only when they improve understanding.
- Use diagrams when they explain architecture, relationships, or workflows better than prose.
- Keep code examples short enough to read during a presentation.
- Ensure Markdown syntax and Marp frontmatter are valid.

---

## Research Workflow

1. Identify the topic, audience, and expected deliverable.
2. Research the topic using reliable sources, prioritizing official documentation.
3. Verify important and time-sensitive claims.
4. Define the topic and prepare the Introduction.
5. Identify the main Problem or need.
6. Explain the Solution and how the technology addresses the problem.
7. Prepare a Hello World example or suitable introductory demonstration.
8. Organize the content under the three mandatory plan sections.
9. Select a visual style appropriate to the topic.
10. Check accuracy, sources, syntax, and readability.
11. Save the presentation as `veille-<topic>.md`.
12. Report what was created and what was actually verified.

---

## Red Flags and Anti-Patterns

| Avoid | Required approach |
|:---|:---|
| Adding more items to the Veille Plan | Keep exactly Introduction, Problem, Solution. |
| Treating a veille like a practical lab | Focus on research and understanding. |
| Listing Hello World as a fourth plan item | Include it within Solution. |
| Copying information without checking it | Verify claims using reliable sources. |
| Inventing statistics or technical incidents | Use evidence-backed information. |
| Overloading slides with definitions | Explain concepts concisely. |
| Showing large, unreadable code blocks | Use a short introductory example. |
| Reusing the same design for every topic | Adapt the visual direction to the technology. |
| Claiming code was tested without running it | Report validation honestly. |
| Creating unnecessary companion files | Keep the presentation self-contained. |
| Adding a "Bonnes Pratiques" / Best Practices slide | Never add a Best Practices slide to any veille presentation. |
