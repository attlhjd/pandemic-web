import { Link, Head } from '@inertiajs/react';

export default function Welcome({ auth, laravelVersion, phpVersion }) {
    return (
        <>
            <Head title="Welcome" />
            <div className="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                <div className="relative z-10 w-full px-4 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="text-center">
                        <h1 className="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-5xl md:text-6xl">Bonjour</h1>
                    </div>
                    <div className="mt-12 text-center">
                        <p className="text-base text-gray-500 dark:text-gray-400 md:text-lg">Bienvenue sur pandemic-web</p>
                    </div>
                    <div className="mt-12 text-center">
                        <Link
                            href={route('login')}
                            className="inline-flex items-center justify-center px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-red-500 hover:bg-red-600 dark:bg-red-600 dark:hover:bg-red-700"
                        >Connecte toi ici</Link>
                    </div>
                </div>
            </div>
        </>
    );
}
