require('./bootstrap');

import React from 'react';
import { render } from 'react-dom';
import { createInertiaApp } from '@inertiajs/inertia-react';
import { InertiaProgress } from '@inertiajs/progress';
import Lang from 'lang.js'

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

var lang = new Lang({
    messages: {
    },
    locale: 'et',
    fallback: 'en'
});
lang.setLocale('et');

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}`),
    setup({ el, App, props }) {
        return render(<App {...props} />, el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
