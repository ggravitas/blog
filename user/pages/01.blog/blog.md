---
title: Blog
media_order: usa-flag.jpg
hide_git_sync_repo_link: true
body_classes: 'header-dark header-transparent'
process:
    markdown: true
    twig: true
hero_classes: 'text-light title-h1h2 overlay-dark-gradient hero-large parallax'
hero_image: usa-flag.jpg
blog_url: /blog
show_sidebar: true
show_breadcrumbs: false
show_pagination: true
content:
    items:
        - '@self.children'
    limit: 12
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
bricklayer_layout: true
display_post_summary:
    enabled: false
sitemap:
    changefreq: monthly
feed:
    description: 'Sample Blog Description'
    limit: 10
pagination: true
---

# Out**Rage** Fatigue
### sick and tired of being sick and tired
