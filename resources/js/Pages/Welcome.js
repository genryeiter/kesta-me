import React from 'react';
import { Link, Head } from '@inertiajs/inertia-react';

export default function Welcome(props) {
    return (
        <>
            <Head title="Welcome" />
            <div className="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center sm:pt-0">
                <div className="fixed top-0 right-0 px-6 py-4 sm:block">
                    {props.auth.user ? (
                        props.auth.isAdmin ? (
                        <Link href={route('admin.users')} className="text-sm text-gray-700 underline">
                            Admin
                        </Link>
                        ) : (
                            <Link href={route('dashboard')} className="text-sm text-gray-700 underline">
                                Minu töölaud
                            </Link>
                        )
                    ) : (
                        <>
                            <Link href={route('login')} className="text-sm text-gray-700 underline">
                               Logi sisse
                            </Link>

                            <Link href={route('register')} className="ml-4 text-sm text-gray-700 underline">
                                Registreeri
                            </Link>
                        </>
                    )}
                </div>

                <div className="max-w-6xl mx-auto sm:px-6 lg:px-8">
                        <h1 class="bg-blue-600 text-white text-2xl py-8 px-20">KESTA.ME</h1>
                </div>
            </div>
        </>
    );
}
