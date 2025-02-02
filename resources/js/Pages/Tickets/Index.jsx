import React, {useEffect, useState} from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head, useForm} from '@inertiajs/react';

export default function Tickets({ tickets, flash, count }) {
    const { delete: destroy } = useForm();
    const [updatedTickets, setUpdatedTickets] = useState(tickets);

    const handleDeleteTicket = (ticketId) => {
        destroy(route('tickets.destroy', { id: ticketId }), {
            preserveScroll: true,
            onSuccess: () => {
                setUpdatedTickets(updatedTickets.filter(ticket => ticket.id !== ticketId));
                alert("Билет успешно удален");
            },
        });
    };

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Мои билеты
                </h2>
            }
        >
            <Head title="Мои билеты" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">

                    <div className="w-full">
                        <div className="max-w-md mx-auto overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800 mb-4">
                            <div className="py-2 font-bold text-md">
                                <p className="text-center">
                                    Заказано билетов: { count }
                                </p>
                            </div>
                        </div>
                    </div>

                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                            {tickets.length > 0 ? (
                                tickets.map(ticket => (
                                <div key={ticket.id} className="mb-4 p-4 border rounded">
                                    <div>Билет: {ticket.ticket_code}</div>
                                    <div>Точка отправления: {ticket.route.departure_point}</div>
                                    <div>Точка прибытия: {ticket.route.arrival_point}</div>
                                    <div>Дата и время отправления: {ticket.route.departure_date} {ticket.route.departure_time}</div>
                                    <div>Дата и время прибытия: {ticket.route.arrival_date} {ticket.route.arrival_time}</div>
                                    <div>Цена: {ticket.route.cost} руб.</div>

                                    <div className="w-full flex justify-around">
                                        <button onClick={() => handleDeleteTicket(ticket.id)} className="px-4 py-2 bg-red-500 text-white rounded-md w-full">
                                            Отказаться от билета
                                        </button>
                                    </div>
                                </div>
                                ))
                            ) : (
                                <div className="w-full py-2 font-bold text-md">
                                    <p className="text-center">
                                        У вас нет билетов
                                    </p>
                                </div>
                            )}
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
