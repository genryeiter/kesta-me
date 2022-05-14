import React from 'react';
import AdminLayout from '@/Layouts/Admin';
import { Head, Link } from '@inertiajs/inertia-react';
import DataTable from 'react-data-table-component';

export default function Index(props) {
    const columns = [
        {
            name: 'ID',
            selector: row => row.id,
        },
        {
            name: 'Eesnimi',
            selector: row => row.name,
        },
        {
            name: 'Perenimi',
            selector: row => row.surname,
        },
        {
            name: 'E-post',
            selector: row => row.email,
        },
        {
            name: '',
            cell: row => <Link href={route('admin.users.edit', row.id)}>Vaata</Link>,
        },
    ];

    return (
        <AdminLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Kasutajad</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">
                            <Link href={route('admin.users.create')} className="mb-4 text-blue-700">Lisa kasutaja</Link>
                            <DataTable
                                columns={columns}
                                data={props.users}
                            />
                        </div>
                    </div>
                </div>
            </div>
        </AdminLayout>
    );
}
