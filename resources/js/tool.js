Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'email-subscribers',
            path: '/email-subscribers',
            component: require('./components/Tool'),
        },
    ])
})
