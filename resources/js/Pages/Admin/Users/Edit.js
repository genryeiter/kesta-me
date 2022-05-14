import React from 'react';
import AdminLayout from '@/Layouts/Admin';
import Button from '@/Components/Button';
import Input from '@/Components/Input';
import Label from '@/Components/Label';
import ValidationErrors from '@/Components/ValidationErrors';
import { Head, Link, useForm } from '@inertiajs/inertia-react';
import { Inertia } from '@inertiajs/inertia'

export default function Edit(props) {
    const { data, setData, put, processing, errors } = useForm({
        name: props.user.name,
        surname: props.user.surname,
    })

    const submit = (e) => {
        e.preventDefault();

        put(route('admin.users.update', { user: props.user.id }));
    };

    const deleteUser = (e) => {
        e.preventDefault()
        Inertia.delete(route('admin.users.destroy', { user: props.user.id }))
    };

    const onHandleChange = (event) => {
        setData(event.target.name, event.target.type === 'checkbox' ? event.target.checked : event.target.value);
    };

    return (
        <AdminLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">{props.user.name}</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">
                            <form onSubmit={submit}>
                                <div>
                                    <Label forInput="name" value="Eesnimi" />

                                    <Input
                                        type="text"
                                        name="name"
                                        value={data.name}
                                        className="mt-1 block w-full"
                                        autoComplete="name"
                                        isFocused={true}
                                        handleChange={onHandleChange}
                                        required
                                    />
                                </div>
                                <div className="mt-4">
                                    <Label forInput="name" value="Perenimi" />

                                    <Input
                                        type="text"
                                        name="surname"
                                        value={data.surname}
                                        className="mt-1 block w-full"
                                        autoComplete="surname"
                                        isFocused={true}
                                        handleChange={onHandleChange}
                                        required
                                    />
                                </div>

                                <div className="my-4">
                                    <ValidationErrors errors={errors} />
                                </div>

                                <div className="flex items-center justify-end mt-4">
                                    <Button type="button" handleClick={deleteUser} className="ml-4 bg-red-700">
                                        Kustuta
                                    </Button>
                                    <Button className="ml-4" handleClick={submit} processing={processing}>
                                        Salvesta
                                    </Button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </AdminLayout>
    );
}
