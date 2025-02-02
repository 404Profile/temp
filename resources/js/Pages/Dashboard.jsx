import React, { useEffect, useState } from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, useForm } from '@inertiajs/react';
import {router} from "@inertiajs/react";

export default function Dashboard({ initialRoutes, departurePoints, arrivalPoints, flash }) {
    const { post, delete: destroy, visit } = useForm();

    const [departurePoint, setDeparturePoint] = useState('');
    const [arrivalPoint, setArrivalPoint] = useState('');
    const [departureDate, setDepartureDate] = useState('');
    const [filteredRoutes, setFilteredRoutes] = useState([]);
    const [notification, setNotification] = useState('');
    const [showNotification, setShowNotification] = useState(false);

    const filterRoutes = () => {
        const filtered = initialRoutes.filter(route => {
            return (!departurePoint || route.departure_point === departurePoint) &&
                (!arrivalPoint || route.arrival_point === arrivalPoint) &&
                (!departureDate || route.departure_date === departureDate);
        });
        setFilteredRoutes(filtered);
    };

    const handleOrderTicket = (routeId) => {
        router.get(route('storeTicket', { route_id: routeId }));
    };

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Главная
                </h2>
            }
        >
            <Head title="Главная" />
            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                            <div>
                                <div className="mb-4 flex justify-between">
                                    <div>
                                        <p className="mt-2 text-md font-medium tracking-tight text-gray-950 max-lg:text-center">
                                            Точка отправления
                                        </p>
                                        <select id="departurePoint" value={departurePoint} onChange={(e) => setDeparturePoint(e.target.value)}
                                                className="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                                            <option value="">Выберите точку отправления</option>
                                            {departurePoints.map(point => (
                                                <option key={point} value={point}>{point}</option>
                                            ))}
                                        </select>
                                    </div>
                                    <div>
                                        <p className="mt-2 text-md font-medium tracking-tight text-gray-950 max-lg:text-center">
                                            Точка прибытия
                                        </p>
                                        <select id="arrivalPoint" value={arrivalPoint} onChange={(e) => setArrivalPoint(e.target.value)}
                                                className="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                                            <option value="">Выберите точку прибытия</option>
                                            {arrivalPoints.map(point => (
                                                <option key={point} value={point}>{point}</option>
                                            ))}
                                        </select>
                                    </div>
                                    <div>
                                        <p className="mt-2 text-md font-medium tracking-tight text-gray-950 max-lg:text-center">
                                            Дата отправления
                                        </p>
                                        <input type="date" id="departureDate" value={departureDate} onChange={(e) => setDepartureDate(e.target.value)} className="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600" />
                                    </div>
                                </div>

                                <div className="w-full flex justify-around">
                                    <button onClick={filterRoutes} className="px-2 py-1 bg-green-500 text-white mr-2 rounded-md w-1/3 mb-4">
                                        Найти маршруты
                                    </button>
                                </div>
                            </div>

                            {filteredRoutes.length > 0 ? (
                                filteredRoutes.map(route => (
                                    <div key={route.id} className="mb-4 p-4 border rounded">
                                        <div>Точка отправления: {route.departure_point}</div>
                                        <div>Точка прибытия: {route.arrival_point}</div>
                                        <div>Цена: {route.cost} руб.</div>
                                        <div>Дата и время отправления: {route.departure_date} {route.departure_time}</div>
                                        <div>Дата и время прибытия: {route.arrival_date} {route.arrival_time}</div>
                                        <div>Время в пути: {calculateTravelTime(route.departure_date, route.departure_time, route.arrival_date, route.arrival_time)}</div>
                                        <div className="w-full flex justify-around">
                                            <button onClick={() => handleOrderTicket(route.id)} className="px-4 py-2 bg-green-500 text-white mr-2 rounded-md w-1/3">Заказать билет</button>
                                        </div>
                                    </div>
                                ))
                            ) : (
                                <div className="text-center">Маршруты не найдены, попробуйте изменить фильтры.</div>
                            )}
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}

function calculateTravelTime(depDate, depTime, arrDate, arrTime) {
    const departure = new Date(`${depDate}T${depTime}`);
    const arrival = new Date(`${arrDate}T${arrTime}`);
    const diff = Math.abs(arrival - departure);
    const hours = Math.floor(diff / 3600000);
    const minutes = Math.floor((diff % 3600000) / 60000);
    return `${hours} ч ${minutes} мин`;
}
