require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import "quasar/dist/quasar.css";
import { Quasar } from 'quasar';
import { 
QLayout,
QHeader,
QDrawer,
QPageContainer,
QPage,
QToolbar,
QToolbarTitle,
QBtn,
QIcon,
QList,
QItem,
QItemSection,
QItemLabel,
QSpace,
QTabs,
QTab,
QRouteTab,
QAvatar,
QCard,
QCardSection,
QCardActions,
QSelect,
QChip,
QInput,
QForm,
QField,
QScrollObserver,
QTooltip,
QSeparator,
QPageSticky,
QAjaxBar,
QPagination,
QInnerLoading,
QSpinner,
QSpinnerBall,
QMenu,
QDate,
QPopupProxy 
} from 'quasar'

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
        .use(Quasar)
        .use({components: [ QLayout,
            QHeader,
            QDrawer,
            QPageContainer,
            QPage,
            QToolbar,
            QToolbarTitle,
            QBtn,
            QIcon,
            QList,
            QItem,
            QItemSection,
            QItemLabel,
            QSpace,
            QTabs,
            QTab,
            QRouteTab,
            QAvatar,
            QCard,
            QCardSection,
            QCardActions,
            QSelect,
            QChip,
            QInput,
            QForm,
            QField,
            QScrollObserver,
            QTooltip,
            QSeparator,
            QPageSticky,
            QAjaxBar,
            QPagination,
            QInnerLoading,
            QSpinner,
            QSpinnerBall,
            QMenu,
            QDate,
            QPopupProxy ] })
            .use(plugin)
            .use(QLayout)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
