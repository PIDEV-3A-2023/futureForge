public function countAppointmentsByDate(): array
{
    $qb = $this->createQueryBuilder('a');
    $qb->select("SUBSTRING(a.dateevent, 6, 2) as month, COUNT(a.dateevent) as count")
       ->groupBy("month")
       ->orderBy("month", "ASC");
    $query = $qb->getQuery();
    $results = $query->getResult();

    $appointmentsByMonth = [];
    foreach ($results as $result) {
        $appointmentsByMonth[$result['month']] = $result['count'];
    }

    return $appointmentsByMonth;
}