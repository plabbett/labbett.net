# Personal Website

This is the repo for my personal website located at https://labbett.net - a static site deployed by Netlify

# Netlify Status

[![Netlify Status](https://api.netlify.com/api/v1/badges/3e4a9310-5e4d-4e5b-ab4d-28142cb2bb63/deploy-status)](https://app.netlify.com/sites/musing-franklin-d7ba2e/deploys)

# Workflow Steps

    # Install composer dependencies, including tightenco/jigsaw
    composer install

    # Install npm repositories, including @fortawesome/font-awesome-free and tailwindcss
    yarn

    # Run Laravel Mix for front-end assets in dev environment
    yarn run dev

    # Run Laravel Mix for front-end assets in production environment
    # This also runs jigsaw build and creates build_production
    yarn run production

    # Build jigsaw site without re-running Laravel Mix everytime
    vendor/bin/jigsaw build
