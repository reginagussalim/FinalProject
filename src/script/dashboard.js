function showAddModal() {
  document.getElementById('addDestinationModal').classList.remove('hidden');
}

function hideAddModal() {
  document.getElementById('addDestinationModal').classList.add('hidden');
  document.getElementById('addDestinationForm').reset();
}

