<!DOCTYPE html>
<link href="/css/output.css" rel="stylesheet">
<html class="light" lang="pt-BR">
<head>
<script src="https://unpkg.com/htmx.org@1.9.10"></script>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>AR Retífica</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "surface-container-high": "#e8e8ea",
                      "on-tertiary-container": "#005067",
                      "on-primary-fixed": "#2a1800",
                      "tertiary": "#006684",
                      "primary-fixed": "#ffddb6",
                      "error-container": "#ffdad6",
                      "error": "#ba1a1a",
                      "background": "#f9f9fc",
                      "surface-container": "#eeeef0",
                      "surface-container-lowest": "#ffffff",
                      "secondary-fixed": "#e2e2e6",
                      "outline": "#867460",
                      "surface-variant": "#e2e2e5",
                      "on-error": "#ffffff",
                      "on-primary-container": "#684100",
                      "inverse-on-surface": "#f0f0f3",
                      "surface-container-low": "#f3f3f6",
                      "on-secondary-fixed": "#191c1e",
                      "tertiary-container": "#00c8fe",
                      "on-primary-fixed-variant": "#643f00",
                      "primary-fixed-dim": "#ffb95a",
                      "on-surface-variant": "#534433",
                      "tertiary-fixed": "#bde9ff",
                      "on-primary": "#ffffff",
                      "surface-tint": "#845400",
                      "surface-bright": "#f9f9fc",
                      "on-background": "#1a1c1e",
                      "on-error-container": "#93000a",
                      "on-surface": "#1a1c1e",
                      "on-secondary": "#ffffff",
                      "inverse-primary": "#ffb95a",
                      "on-secondary-container": "#636468",
                      "surface": "#f9f9fc",
                      "primary-container": "#ffa600",
                      "primary": "#845400",
                      "surface-dim": "#dadadc",
                      "outline-variant": "#d8c3ac",
                      "tertiary-fixed-dim": "#66d3ff",
                      "secondary-container": "#e2e2e6",
                      "inverse-surface": "#2f3133",
                      "secondary": "#5d5e62",
                      "secondary-fixed-dim": "#c5c6ca",
                      "on-tertiary": "#ffffff",
                      "on-tertiary-fixed": "#001f2a",
                      "on-secondary-fixed-variant": "#45474a",
                      "surface-container-highest": "#e2e2e5",
                      "on-tertiary-fixed-variant": "#004d64"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "999px"
              },
              "fontFamily": {
                      "headline": ["Manrope"],
                      "body": ["Inter"],
                      "label": ["Inter"]
              }
            },
          },
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .font-headline { font-family: 'Manrope', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .tonal-shift { background-image: linear-gradient(to bottom right, var(--tw-gradient-from), var(--tw-gradient-to)); }
    </style>
</head>
<body class="bg-surface font-body text-on-surface flex overflow-hidden">