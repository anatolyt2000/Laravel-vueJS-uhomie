// const Home = () => import('~/pages/home').then(m => m.default || m)

// const Dashboard = () => import('~/pages/dashboard/index').then(m => m.default || m)

// const Projects = () => import('~/pages/projects/index').then(m => m.default || m)
// const ProjectList = () => import('~/pages/projects/list').then(m => m.default || m)
// const ProjectCreate = () => import('~/pages/projects/create').then(m => m.default || m)
// const ProjectEdit = () => import('~/pages/projects/edit').then(m => m.default || m)
// const ProjectShare = () => import('~/pages/projects/share').then(m => m.default || m)

const NotFound = () => import('~/pages/errors/404').then(m => m.default || m)

export default [
    {
        // path: '/',
        // component: Home,
        // children: [
        //     {   
        //         path: 'dashboard', 
        //         name: 'dashboard', 
        //         component: Dashboard
        //     },
        //     {   
        //         path: 'projects',
        //         component: Projects,
        //         children: [
        //             {   path: '/', name: 'projects.list', component: ProjectList },
        //             {   path: 'create', name: 'projects.create', component: ProjectCreate },
        //             {   path: ':id/edit', name: 'projects.edit', component: ProjectEdit },
        //             {   path: ':id/share', name: 'projects.share', component: ProjectShare }
        //         ]
        //     },
        // ]
    }
]