<?php

namespace App\Controller\Admin;

use App\Entity\Location;
use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;

#[AdminDashboard(routePath: '/admin', routeName: 'admin')]
class DashboardController extends AbstractDashboardController
{
    public function index(): Response
    {
        return $this->redirectToRoute('admin_location_index');

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // 1.1) If you have enabled the "pretty URLs" feature:
        // return $this->redirectToRoute('admin_user_index');
        //
        // 1.2) Same example but using the "ugly URLs" that were used in previous EasyAdmin versions:
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirectToRoute('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Christian Miracles')

            //->setFaviconPath('favicon.svg')

            // the domain used by default is 'messages'
            ->setTranslationDomain('my-custom-domain')

            // by default, the UI color scheme is 'auto', which means that the backend
            // will use the same mode (light/dark) as the operating system and will
            // change in sync when the OS mode changes.
            // Use this option to set which mode ('light', 'dark' or 'auto') will users see
            // by default in the backend (users can change it via the color scheme selector)
            ->setDefaultColorScheme('dark')
            // instead of magic strings, you can use constants as the value of
            // this option: EasyCorp\Bundle\EasyAdminBundle\Config\Option\ColorScheme::DARK

            // by default, all backend URLs are generated as absolute URLs. If you
            // need to generate relative URLs instead, call this method
            ->generateRelativeUrls()

            // set this option if you want to enable locale switching in dashboard.
            // IMPORTANT: this feature won't work unless you add the {_locale}
            // parameter in the admin dashboard URL (e.g. '/admin/{_locale}').
            // the name of each locale will be rendered in that locale
            // (in the following example you'll see: "English", "Polski")
            // to customize the labels of locales, pass a key => value array
            // (e.g. to display flags; although it's not a recommended practice,
            // because many languages/locales are not associated to a single country)
            ->setLocales([
                'en' => 'English',
                'lt' => 'Lithuanian'
            ])
            ;
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::linkToCrud('Locations', 'fa fa-flag', Location::class),
        ];
    }
}
