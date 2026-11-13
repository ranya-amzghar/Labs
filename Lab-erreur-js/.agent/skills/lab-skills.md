---
name: marp-lab-presentation
description: Use when creating, adapting, or formatting a technical lab or assignment into a concise, clear, visually appealing Marp presentation while preserving the teacher's mandatory structure.
---

# Marp Lab Presentation Skill

## Overview

Transform a completed technical lab or assignment into a clear, concise, and visually appealing Marp presentation (`lab-<topic>.md`).

Prioritize:
- Clear educational content.
- Short, meaningful explanations.
- Readable and well-organized slides.
- A visual style suited to the lab's topic.
- Technical accuracy.

Avoid unnecessary details, repetitive content, overcrowded slides, and decorative elements that do not improve understanding.

---

## When to Use

Use this skill when:
- Creating a presentation for a lab or technical assignment.
- Transforming lab instructions, notes, or practical results into slides.
- Improving an existing Marp presentation.

Do NOT use for:
- Writing internal task specifications.
- Creating separate documentation files when the deliverable must remain a single presentation.

---

## Mandatory Slide Architecture

Every presentation must be delivered as one file named `lab-<topic>.md`, with `marp: true`.

The first five slides must follow this exact order.

### Slide 1: Title
- Display the lab title.
- Must include:

**Réalisée par :** Ranya Amzghar  
**Encadrée par :** Essarraj Fouad

### Slide 2: Lab Plan

Use this structure:

```markdown
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented
```

### Slide 3: Introduction
- Briefly explain the topic, its purpose, and its usefulness.
- Include only the essential concepts, tools, or technologies.
- Prefer a short definition and a few clear points.

### Slide 4: Problems Encountered
- Explain the problems, needs, or difficulties relevant to the lab.
- Use concrete, understandable descriptions.
- Do not invent technical incidents or claim that hypothetical errors actually occurred.
- If the lab has no relevant technical incidents, state: "No blocking technical problems encountered during implementation."
- For conceptual labs, describe the general problems the topic addresses instead of forcing a debugging report.

### Slide 5: Solutions Implemented
- Explain how the problems or needs presented in Slide 4 can be addressed.
- Keep solutions specific, concise, and relevant.
- Use short examples when they improve understanding.

### Subsequent Slides: Practical Examples and Implementation
- Include only the examples necessary to understand the lab.
- Use code, commands, tables, or diagrams when they add educational value.
- Include complete runnable code when the task requires implementation.
- Do not add unnecessary exercises, tutorials, or technical sections unrelated to the assignment.
- Keep all required content inside the presentation file. Do not create separate exercise or companion Markdown files.

**The first five slides are mandatory. Additional slides must be determined by the actual lab requirements.**

---

## Content and Length Rules

1. Present one main idea per slide.
2. Prefer 3–5 short bullet points per slide.
3. Use concise sentences and meaningful headings.
4. Avoid long paragraphs and repeated explanations.
5. Do not add slides merely to increase the presentation's length.
6. Do not include every possible feature of a technology; focus on what the assignment requires.
7. Use practical examples only when they help explain a concept or demonstrate a solution.
8. Do not require code examples for conceptual labs.
9. Do not add a summary table, verification matrix, or conclusion slide unless it provides real value or is required.
10. Never mark a task, test, or implementation as validated without evidence.

These guidelines may be adjusted when the technical requirements genuinely demand more detail.

---

## Design and Formatting Standards

### 1. Marp Configuration

Start every presentation with valid Marp frontmatter:

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

Add custom CSS only when it improves the presentation.

### 2. Adapt the Visual Style to Each Lab

**Do not use the same complete design for every lab.**

Choose a visual direction that suits the subject and the content. For example:
- Markdown: clean, minimal, documentation-inspired design.
- Git and GitHub: technical, structured, workflow-oriented design.
- Laravel or PHP: modern developer-oriented design with clear code examples.
- UI/UX: visual, spacious, design-focused layouts.
- Networking: diagrams, connections, and structured technical illustrations.

These are examples, not fixed themes.

For each presentation:
- Select a coherent color palette.
- Use readable typography and clear title hierarchy.
- Maintain consistent spacing and alignment.
- Use whitespace to avoid overcrowding.
- Keep strong contrast between text and background.
- Use diagrams, visual comparisons, or simple illustrations when useful.
- Avoid excessive decoration, unnecessary borders, and large blocks of CSS.
- Do not alternate light and dark backgrounds mechanically. Choose the background that best supports each slide while maintaining overall consistency.

### 3. Slide Readability

- Design for presentation on a large screen.
- Make headings immediately understandable.
- Avoid shrinking text to fit too much content.
- Split dense content across slides when necessary.
- Prefer short examples over large code blocks.
- Ensure tables and diagrams remain readable.

### 4. Markdown and Code Formatting

- Separate slides using `---` on its own line.
- Declare the language on every fenced code block, such as `markdown`, `html`, `javascript`, `bash`, `php`, `json`, or `sql`.
- Use explicit Markdown table alignment when appropriate (`:---`, `:---:`, `---:`).
- Ensure examples use valid syntax.
- Explain the purpose of an example without repeating the entire code in prose.

---

## Workflow

1. Read the original lab or assignment.
2. Identify the actual objectives and required deliverables.
3. Determine the most relevant problems and solutions.
4. Prepare concise content that respects the mandatory five-slide structure.
5. Choose a visual style appropriate to the topic.
6. Add only the practical slides needed to fulfil the assignment.
7. Check the Markdown syntax, slide separators, code fences, and frontmatter.
8. Review the presentation for readability, accuracy, repetition, and unnecessary content.
9. Save the final presentation in the appropriate project directory.
10. Report what was created and whether it was actually validated.

---

## Red Flags and Anti-Patterns

| Avoid | Required approach |
|:---|:---|
| Omitting author or supervisor on the title slide | Always include **Réalisée par :** Ranya Amzghar and **Encadrée par :** Essarraj Fouad. |
| Changing the first five slides' order | Preserve the teacher's mandatory structure. |
| Making every presentation visually identical | Adapt the design to the topic. |
| Writing long explanations on slides | Use concise, meaningful points. |
| Inventing technical incidents | Report only supported facts or clearly identified general problems. |
| Adding unrelated practical examples | Follow the lab's objectives. |
| Including excessive code, tables, or CSS | Use only what improves understanding. |
| Adding a mandatory verification matrix | Include it only when useful or required. |
| Creating separate Markdown exercise files | Keep the required deliverable self-contained. |
| Claiming tests succeeded without running them | Report validation honestly. |