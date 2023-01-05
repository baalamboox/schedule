<?php
	require_once 'Connection.php';
	class Contacts extends Connection {
		public function add_contact($data) {
			$connection = Connection::connection();
			$sql = 'INSERT INTO contacts_table(category_id, contact_names, contact_first_surname, contact_second_surname, contact_phone_number, contact_email) VALUES (?, ?, ?, ?, ?, ?)';
			$query = $connection->prepare($sql);
			$query->bind_param('isssss', $data['category_id'], $data['contact_names'], $data['contact_first_surname'], $data['contact_second_surname'], $data['contact_phone_number'], $data['contact_email']);
			$result = $query->execute();
			return $result;
		}
		public function delete_contact($contact_id) {
			$connection = Connection::connection();
			$sql = 'DELETE FROM contacts_table WHERE contact_id = ?';
			$query = $connection->prepare($sql);
			$query->bind_param('i', $contact_id);
			$result = $query->execute();
			return $result;
		}
		public function get_contact_data($contact_id) {
			$connection = Connection::connection();
			$sql = "SELECT category_id, contact_names, contact_first_surname, contact_second_surname, contact_phone_number, contact_email, contact_id FROM contacts_table WHERE contact_id = '$contact_id'";
			$result = mysqli_query($connection, $sql);
			$contact = mysqli_fetch_array($result);
			$data = array(
				"contact_id" => $contact['contact_id'],
				"category_id" => $contact['category_id'],
				"contact_names" => $contact['contact_names'],
				"contact_first_surname" => $contact['contact_first_surname'],
				"contact_second_surname" => $contact['contact_second_surname'],
				"contact_phone_number" => $contact['contact_phone_number'],
				"contact_email" => $contact['contact_email']
			);
			return $data;
		}
		public function update_contact($data) {
			$connection = Connection::connection();
			$sql = 'UPDATE contacts_table SET category_id = ?, contact_names = ?, contact_first_surname = ?, contact_second_surname = ?, contact_phone_number = ?, contact_email = ? WHERE contact_id = ?';
			$query = $connection->prepare($sql);
			$query->bind_param('isssssi', $data['category_id'], $data['contact_names'], $data['contact_first_surname'], $data['contact_second_surname'], $data['contact_phone_number'], $data['contact_email'], $data['contact_id']);
			$result = $query->execute();
			return $result;
		}
	}
?>